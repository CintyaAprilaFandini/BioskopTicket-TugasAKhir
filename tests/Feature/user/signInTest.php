<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class signInTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_signintest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
