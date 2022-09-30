<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class indexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_indextext()
    {
        $response = $this->get('/log-in');

        $response->assertStatus(200);
        
    }
}
