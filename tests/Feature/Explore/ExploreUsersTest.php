<?php

namespace Tests\Feature\Explore;

use App\Http\Livewire\ExploreUsers;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ExploreUsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function explore_users_can_be_rendered()
    {
        $this->actingAs(User::factory()->create());
        $response = $this->get(route('explore.users'));
        $response->assertSeeLivewire('explore-users');
    }

    /** @test */
    public function user_can_follows()
    {
        $this->actingAs(User::factory()->create());

        $user = User::factory()->create();

        Livewire::test(ExploreUsers::class)
                ->call('follow', $user)
                ->assertStatus(200);
    }
}
