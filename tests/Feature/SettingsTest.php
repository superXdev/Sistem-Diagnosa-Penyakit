<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SettingsTest extends TestCase
{
    use DatabaseTransactions;

    public function test_settings_screen_can_be_rendered()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->get(route('admin.settings'));

        $response->assertStatus(200); 
    }

    public function test_new_settings_can_be_saved()
    {
        $user = User::find(1);

        $response = $this->actingAs($user)->post(route('admin.settings'), [
            'site_name' => 'New site',
            'keyword' => 'web, laravel, etc',
            'description' => 'blablablablabal'
        ]);

        $response->assertStatus(302); 
    }
}
