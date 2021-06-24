<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;
use Tests\TestCase;

/**
 * @see App\Http\Controllers\SignUpController;
 */

class SignUpControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test index
     *
     * @return void
     */
    public function ユーザー登録画面を開ける()
    {
        $this->withoutExceptionHandling();

        $this->get('signup')
            ->assertOk();
    }

    private function validData($overrides = [])
    {
        return array_merge([
            'name' => '太郎',
            'email' => 'aaa@bbb.net',
            'password' => 'abcd1234',
        ], $overrides);
    }

    /**
     * @test store
     *
     * @return void
     */
    public function ユーザー登録できる()
    {
        $this->withoutExceptionHandling();

        // データ検証

        // DBに保存
        // $validData = [
        //     'name' => '太郎',
        //     'email' => 'aaa@bbb.net',
        //     'password' => 'abcd1234',
        // ];

        // $validData = $this->validData();
        // $validData = User::factory()->make()->toArray();
        // $validData = User::factory()->valid()->raw();
        $validData = User::factory()->validData();
        // dd($validData);
        $this->post('signup', $validData)
        ->assertRedirect('mypage/blogs');

        unset($validData['password']);

        $this->assertDatabaseHas('users', $validData);

        // パスワードの検証
        //$this->assertDatabaseHas('users', $validData);と同じ
        $user = User::firstWhere($validData);
        $this->assertNotNull($user);
        $this->assertTrue(Hash::check('abcd1234', $user->password));

        // ログインさせてからマイページにリダイレクト
        $this->assertAuthenticatedAs($user);

    }

    /**
     * @test store
     *
     * @return void
     */
    public function 不正なデータではユーザー登録出来ない()
    {
        // $this->withoutExceptionHandling();

        $url = 'signup';

        $this->post($url, ['name' => ''])->assertSessionHasErrors(['name' => '名前は必ず指定してください。']);
        $this->post($url, ['name' => str_repeat('あ', 21)])->assertSessionHasErrors(['name' => '名前は、20文字以下で指定してください。']);
        $this->post($url, ['name' => str_repeat('あ', 20)])->assertSessionDoesntHaveErrors('name');

        $this->post($url, ['email' => ''])->assertSessionHasErrors(['email' => 'メールアドレスは必ず指定してください。']);
        $this->post($url, ['email' => 'aaa@bbb@ccc'])->assertSessionHasErrors(['email' => 'メールアドレスには、有効なメールアドレスを指定してください。']);
        $this->post($url, ['email' => 'aaa@いいい.ううう'])->assertSessionHasErrors(['email' => 'メールアドレスには、有効なメールアドレスを指定してください。']);

        User::factory()->create(['email' => 'aaa@bbb.net']);
        $this->post($url, ['email' => 'aaa@bbb.net'])->assertSessionHasErrors(['email' => 'メールアドレスの値は既に存在しています。']);

        $this->post($url, ['password' => ''])->assertSessionHasErrors(['password' => 'パスワードは必ず指定してください。']);
        $this->post($url, ['password' => 'abcd123'])->assertSessionHasErrors(['password' => 'パスワードは、8文字以上で指定してください。']);
        $this->post($url, ['password' => 'abcd1234'])->assertSessionDoesntHaveErrors('password');

        // $this->get('signup');
        $this->from($url)->post($url, [])
            ->assertRedirect($url);
    }
}
