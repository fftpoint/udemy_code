<?php

namespace Tests\Feature\Controllers\Mypage;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertEquals;

/**
 * @see App\Http\Controllers\Mypage\BlogMypageController
 */

class BlogMypageControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test index
     *
     * @return void
     */
    public function ゲストはブログを管理できない()
    {
        $url = 'mypage/login';

        $this->get('mypage/blogs')->assertRedirect($url);
        $this->get('mypage/blogs/create')->assertRedirect($url);
        $this->post('mypage/blogs/create', [])->assertRedirect($url);
        $this->get('mypage/blogs/edit/1')->assertRedirect($url);
        $this->post('mypage/blogs/edit/1')->assertRedirect($url);
    }

    /**
     * @test index
     *
     * @return void
     */
    public function マイページ、ブログ一覧で自分のデータのみ表示される()
    {
        $this->withoutExceptionHandling();

        $user = $this->login();

        $other = Blog::factory()->create();
        $myblog = Blog::factory()->create(['user_id' => $user]);

        $this->get('mypage/blogs')
            ->assertOk()
            ->assertDontSee($other->title)
            ->assertSee($myblog->title);
    }

    /**
     * @test create
     *
     * @return void
     */
    public function マイページ、ブログの新規登録画面を開ける()
    {
        $this->withoutExceptionHandling();

        $this->login();
        $this->get('mypage/blogs/create')
            ->assertOk();
    }

    /**
     * @test store
     *
     * @return void
     */
    public function マイページ、ブログを新規登録できる、公開の場合()
    {
        // $this->withoutExceptionHandling();
        $validData = Blog::factory()->validData();

        $this->login();

        $this->post('mypage/blogs/create', $validData)
            ->assertRedirect('mypage/blogs/edit/1');
            $this->assertDatabaseHas('blogs', $validData);
    }

    /**
     * @test store
     *
     * @return void
     */
    public function マイページ、ブログを新規登録できる、非公開の場合()
    {
        // $this->withoutExceptionHandling();
        $validData = Blog::factory()->validData();

        $this->login();

        unset($validData['status']);

        $this->post('mypage/blogs/create', $validData)
            ->assertRedirect('mypage/blogs/edit/1');
            $this->assertDatabaseHas('blogs', $validData);

        $validData['status'] = 0;

        $this->assertDatabaseHas('blogs', $validData);
    }

    /**
     * @test store
     *
     * @return void
     */
    public function マイページ、ブログの登録時の入力チェック()
    {
        // $this->markTestIncomplete('未実装');

        // $this->withoutExceptionHandling();

        $url = 'mypage/blogs/create';

        $this->login();

        $this->from($url)->post($url, [])
            ->assertRedirect($url);

        $this->post($url, ['title' => ''])->assertSessionHasErrors(['title' => 'titleは必ず指定してください。']);
        $this->post($url, ['title' => str_repeat('a', 256)])->assertSessionHasErrors(['title' => 'titleは、255文字以下で指定してください。']);
        $this->post($url, ['title' => str_repeat('a', 255)])->assertSessionDoesntHaveErrors(['title' => 'titleは、255文字以下で指定してください。']);

        $this->post($url, ['body' => ''])->assertSessionHasErrors(['body' => 'bodyは必ず指定してください。']);
    }

    /**
     * @test edit
     *
     * @return void
     */
    public function 他人のブログの編集画面は開けない()
    {
        // $this->withoutExceptionHandling();
        $blog = Blog::factory()->create();

        $this->login();

        $this->get('mypage/blogs/edit/'.$blog->id)
            ->assertForbidden();
    }

    /**
     * @test update
     *
     * @return void
     */
    public function 他人のブログは更新できない()
    {
        // $this->withoutExceptionHandling();

        $validData = [
            'title' => '新タイトル',
            'body' => '新本文',
            'status' => '1'
        ];

        $blog = Blog::factory()->create();

        $this->login();

        $this->post('mypage/blogs/edit/'.$blog->id, $validData)
            ->assertForbidden();

        // $this->assertDatabaseMissing($blog, $validData);
        $this->assertCount(1, Blog::all());
        $this->assertEquals($blog->toArray(), Blog::first()->toArray());
    }

    /**
     * @test destroy
     *
     * @return void
     */
    public function 他人のブログは削除できない()
    {
        $this->markTestIncomplete('未実装');
    }

    /**
     * @test edit
     *
     * @return void
     */
    public function 自分のブログの編集画面は開ける()
    {
        // $this->withoutExceptionHandling();
        $blog = Blog::factory()->create();

        $this->login($blog->user);

        $this->get('mypage/blogs/edit/'.$blog->id)
            ->assertOk();
    }

    /**
     * @test update
     *
     * @return void
     */
    public function 自分のブログは更新できる()
    {
        $this->withoutExceptionHandling();

        $validData = [
            'title' => '新タイトル',
            'body' => '新本文',
            'status' => '1'
        ];

        $blog = Blog::factory()->create();

        $this->login($blog->user);

        $this->post('mypage/blogs/edit/'.$blog->id, $validData)
            ->assertRedirect('mypage/blogs/edit/'.$blog->id);

        $this->get('mypage/blogs/edit/'.$blog->id)
            ->assertSee('ブログを更新しました');

        $this->assertDatabaseHas('blogs', $validData);

        $this->assertCount(1, Blog::all());
        $this->assertEquals(1, Blog::count());

        // 項目が少ない場合は、fresh()を使う
        $this->assertEquals('新タイトル', $blog->fresh()->title);
        $this->assertEquals('新本文', $blog->fresh()->body);

        // 項目が多い時は、refresh
        $blog->refresh();
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);
        $this->assertEquals('新本文', $blog->body);

    }
}
