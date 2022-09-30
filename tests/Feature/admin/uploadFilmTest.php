<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class uploadFilmTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_uploadfilmtest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
