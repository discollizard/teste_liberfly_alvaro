<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JWTIsRetrievedTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_jwt_is_retrieved_from_the_login_endpoint(): void
    {

        // all requests should contain the accept => application/json 
        // header because, if otherwise, laravel would return plain text,
        // and the LiberFly exam specifies that responses should be JSON

        $response = $this->withHeaders([
            'accept' => 'application/json'
        ])->postJson('/api/auth/login', [
            'email' => 'testealvaro@liberfly.com',
            'password' => 'password'
        ]);

        $response->assertStatus(200);

        $this->assertTrue(isset($response['access_token']));
    }
}
