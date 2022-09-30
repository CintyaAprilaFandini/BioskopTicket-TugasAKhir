<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class welcomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_welcometest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
