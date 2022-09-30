<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class signUpTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_signUpTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
