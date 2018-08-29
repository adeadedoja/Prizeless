<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditContactTest extends TestCase
{
    /**
     * Test Edit page show.
     *
     * @return void
     */
    public function test_it_shows_edit_page()
    {
        //create a new contact
        $contact = $this->createNewContact();
        //go to edit page of recently created contact
        $response = $this->get("/contacts/{$contact->id}/edit");
        //check if success
        $response->assertStatus(200);
    }

    public function test_it_updates_contact()
    {
        //create a new contact
        $contact = $this->createNewContact();
        //change the name property of contact object to 'Updated'
        $contact->name = 'Updated';
        //send it to the route for updating contacts
        $response = $this->put("/contacts/{$contact->id}", $contact->toArray());
        //check if it redirects with contacts
        $response->assertRedirect("/contacts");
        //check if name in database has been updated to set one
        $this->assertEquals('Updated', $contact->name);
    }
}
