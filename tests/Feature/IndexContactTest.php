<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Contact;
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
        //visit contacts url
        $response = $this->get('/contacts');
        //check if success
        $response->assertStatus(200);
        //check if text 'All contacts' show on page
        $response->assertSee('All Contacts');
    }

    public function test_index_page_shows_contacts_inserted()
    {
        //create a new contact
        $contact = $this->createNewContact();
        //get latest entry into Contacts table
        $latestcontact = Contact::latest()->first();
        //check if they are equal
        $this->assertEquals($contact->toArray(), $latestcontact->toArray());
    }
}
