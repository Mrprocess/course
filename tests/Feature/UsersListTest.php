<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testUsersPageJsonResponse()
    {
        $user=factory(\App\User::class)->create();

        $response = $this->actingAs($user,'api')->json('GET','/api/users');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([[
                "id",
                "name",
                "email",
                "email_verified_at",
                "password",
                "remember_token",
                "created_at",
                "updated_at"
            ]
            ]);
    }

}
