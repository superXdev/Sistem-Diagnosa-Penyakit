<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{

    public function test_dashboard_screen_can_be_rendered()
    {
        $this->menu_screen(route('admin.dashboard'));
    }
    
    public function test_activity_log_screen_can_be_rendered()
    {
        $this->menu_screen(route('admin.logs'));
    }


    public function menu_screen($routes)
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get($routes);

        $response->assertStatus(200); 
    }
}
