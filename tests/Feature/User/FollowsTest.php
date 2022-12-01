<?php

namespace Tests\Feature\User;

use App\Http\Livewire\Users;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FollowsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function user_can_following()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(User::factory()->create());
        $user = User::factory()->create();

        Livewire::test(Users::class)
                ->call('follow', $user)
                ->assertEmitted('follows');
    }
}
