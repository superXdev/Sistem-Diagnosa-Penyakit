<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemberTest extends TestCase
{
    use DatabaseTransactions;

    public function test_member_screen_can_be_rendered()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get(route('admin.member'));

        $response->assertStatus(200); 
    }

    public function test_new_member_can_be_created()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->post(route('admin.member.create'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'confirm-password' => 'password',
            'roles' => 'Admin'
        ]);

        $response->assertStatus(302); 
    }

    public function test_member_can_be_edited()
    {
        $admin = User::find(1);
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.member.update', $user->id), [
            'name' => 'This is User',
            'email' => $user->email,
            'password' => 'password',
            'confirm-password' => 'password',
            'roles' => 'Admin'
        ]);

        $response->assertStatus(302); 
    }

    public function test_member_can_be_deleted()
    {
        $admin = User::find(1);
        $user = User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.member.delete', $user->id), []);

        $response->assertStatus(302); 
    }

    public function test_profile_can_be_updated()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('admin.profile'), [
            'name' => 'New name'
        ]);

        $response->assertStatus(302); 
    }
}
