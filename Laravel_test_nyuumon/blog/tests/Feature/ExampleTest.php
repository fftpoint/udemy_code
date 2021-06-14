<?php

namespace Tests\Feature;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_ephppxample()
    {
        // 準備
        $user = User::factory()->create();

        // 実行
        $response = $this->get('/');

        // 検証
        $response->assertStatus(200);

        // $this->get('/')->assertStatus(200);
    }

    public function test_example2()
    {
        // 準備
        $user = User::factory()->create();

        // 実行
        $response = $this->get('/');

        // 検証
        $response->assertStatus(200);

    }
}

