<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;

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

        $response->assertViewIs('contacts.create');
    }

    public function test_contact_store()
    {
        $data = (factory('App\Contact')->make())->toArray();
  
        $response = $this->post('contacts', $data);
        
        $this->assertDatabaseHas('contacts', $data);

        $response->assertStatus(302);

        $response->assertRedirect('/contacts');

        $response->assertSessionHas('message', 'Contact was succesfully added!');
    }
}
