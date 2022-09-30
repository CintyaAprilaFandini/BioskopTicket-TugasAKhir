<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class homeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_hometest()
    {
        $response = $this->get('/log-in');

        $response->assertStatus(200);
    }
}
