<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class listPesananTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_listpesanantest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
