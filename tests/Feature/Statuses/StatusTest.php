<?php

namespace Tests\Feature\Statuses;

use Tests\TestCase;
use App\Models\User;
use App\Models\Status;
use Livewire\Livewire;
use Illuminate\Support\Str;
use GuzzleHttp\Promise\Create;
use App\Http\Livewire\PostForm;
use App\Http\Livewire\Statuses;
use Database\Factories\StatusFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function status_page_can_be_rendered()
    {
        $this->actingAs(User::factory()->create());
        $response = $this->get(route('status.index'));
        $response->assertSeeLivewire('post-form');
        $response->assertSeeLivewire('statuses');
        $response->assertSeeLivewire('users');
        $response->assertStatus(200);
    }

    /** @test */
    public function body_is_required()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(PostForm::class)
                ->set('body', '')
                ->call('store')
                ->assertHasErrors(['body' => 'required']);
    }

    /** @test */
    public function statuses_can_be_post()
    {
        $this->actingAs(User::factory()->create());

        Livewire::test(PostForm::class)
                ->set('body', 'the boy')
                ->call('store')
                ->assertEmitted('statusPosted');
    }

    /** @test */
    public function status_can_be_deleteed()
    {
        $this->actingAs(User::factory()->create());

        $status = Status::factory()->create();

        Livewire::test(Statuses::class)
                ->call('deleteStatus', $status->id)
                ->assertStatus(200);
    }

    /** @test */
    public function status_can_be_updated()
    {
        $this->actingAs(User::factory()->create());

        $status = Status::factory()->create();

        Livewire::test(Statuses::class)
                ->set('body', '')
                ->set('status_id', $status->id)
                ->call('updateStatus', $status->id)
                ->assertStatus(200);;
    }

    /** @test */
    public function status_can_be_like()
    {
        $this->actingAs(User::factory()->create());

        $status = Status::factory()->create();

        Livewire::test(Statuses::class)
                ->call('like', $status->id)
                ->assertStatus(200);
    }
}
