<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_shows_index_page()
    {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
        
        $response->assertSee('All Contacts');
    }
}
