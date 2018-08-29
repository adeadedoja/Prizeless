<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteContactTest extends TestCase
{
    /**
     * Delete Contact test.
     *
     * @return void
     */
    public function testDeleteMethod()
    {
        //create a new contact
        $contact = $this->createNewContact();
        //send to delete route
        $response = $this->delete("/contacts/{$contact->id}");
        //check if redirects right
        $response->assertRedirect('/contacts');
        //see if it is null
        $this->assertNull($contact->fresh());
        //see if it is present in the database after deleted
        $this->assertDatabaseMissing('contacts', $contact->toArray());
        //see if the says the text 'Contact was successfully deleted'
        $response->assertSessionHas('message', 'Contact was succesfully deleted!');
    }
}
