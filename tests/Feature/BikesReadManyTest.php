<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BikesReadManyTest extends TestCase
{
    public function test_bike_read_many_is_working(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/bike');

        $response->assertStatus(200);
    }
}
