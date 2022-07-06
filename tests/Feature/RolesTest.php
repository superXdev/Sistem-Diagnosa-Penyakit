<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RolesTest extends TestCase
{
    use DatabaseTransactions;

    public function test_roles_screen_can_be_rendered()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get(route('admin.roles'));

        $response->assertStatus(200); 
    }

    public function test_new_roles_screen_can_be_rendered()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get(route('admin.roles.create'));

        $response->assertStatus(200); 
    }

    public function test_new_roles_can_be_created()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->post(route('admin.roles.create'), [
            'name' => 'Test',
            'permission' => [1,5,9]
        ]);

        $response->assertStatus(302); 
    }

    public function test_roles_can_be_edited()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->post(route('admin.roles.update', 1), [
            'name' => 'Admin',
            'permission' => [1,5,9]
        ]);

        $response->assertStatus(302); 
    }

    public function test_roles_can_be_deleted()
    {
        $user = User::find(1);
        
        $response = $this->actingAs($user)->post(route('admin.roles.delete', 1), []);

        $response->assertStatus(302);
    }
}
