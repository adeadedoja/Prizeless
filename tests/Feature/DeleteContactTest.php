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
        $data = factory('App\Contact')->create();

        $response = $this->delete("/contacts/{$data->id}");

        $response->assertRedirect('/contacts');

        $this->assertNull($data->fresh());

        $this->assertDatabaseMissing('contacts', $data->toArray());

        $response->assertSessionHas('message', 'Contact was succesfully deleted!');
    }
}
