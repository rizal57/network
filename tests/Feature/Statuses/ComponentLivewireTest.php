<?php

namespace Tests\Feature\Statuses;

use App\Http\Livewire\Statuses;
use App\Http\Livewire\Users;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ComponentLivewireTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function component_users_can_be_rendered()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('status.index'));
        $response->assertSeeLivewire(Users::class);
        $response->assertStatus(200);
    }

    /** @test */
    public function component_statuses_can_be_rendered()
    {
        $this->actingAs(User::factory()->create());

        $respone = $this->get(route('status.index'));
        $respone->assertSeeLivewire(Statuses::class);
    }
}
