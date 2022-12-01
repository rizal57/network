<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function home_page_can_be_rendered()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }
}
