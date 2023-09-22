<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WishTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_if_get_all_works(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_if_store_works(): void
    {
        $response = $this->post('/wish', [
            'name' => 'John',
            'wish' => 'descriptions descriptions'
        ]);

        $response->assertStatus(200);
    }
}
