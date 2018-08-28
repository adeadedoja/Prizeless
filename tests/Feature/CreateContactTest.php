<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateContactTest extends TestCase
{
    /**
     * A test to see if contact can be created
     *
     * @return void
     */
    public function test_open_create_contact_page()
    {
        $response = $this->get('contacts/create');
  
        $response->assertSuccessful();
    }

    public function test_can_create_contact()
    {
        $data = (factory(Contact::class)->make())->toArray();
  
        $this->post('post/create', $data);
        
        $this->assertDatabaseHas('blogs', $data);
    }
}
