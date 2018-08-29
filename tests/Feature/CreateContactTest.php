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
        //go to the create page
        $response = $this->get('contacts/create');
        //check if it sent through
        $response->assertSuccessful();
        //check if it went to the views contacts.create
        $response->assertViewIs('contacts.create');
    }

    public function test_it_stores_contacts()
    {
        //create a new contact
        $contact = $this->createNewContact();
        //convert to array
        $data = $contact->toArray();
        //send to database to add
        $response = $this->post('contacts', $data);
        //see if database has it
        $this->assertDatabaseHas('contacts', $data);
        //check if it redirects back to the index page
        $response->assertRedirect('/contacts');
        //see if it says the text 'Contact was successfully added'
        $response->assertSessionHas('message', 'Contact was succesfully added!');
    }
}
