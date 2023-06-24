<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BikesReadSingleTest extends TestCase
{
    public function test_bike_read_single_is_working(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/bike/1');

        $response->assertStatus(200);
    }
}

