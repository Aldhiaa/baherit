<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SettingsTest extends TestCase
{
    use RefreshDatabase;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Create an admin user
        $this->user = User::factory()->create();
        $this->user->assignRole('admin');
    }

    /** @test */
    public function admin_can_view_settings_page()
    {
        $response = $this->actingAs($this->user)
                         ->get(route('admin.settings.index'));
        
        $response->assertStatus(200);
        $response->assertSee('Site Settings');
    }

    /** @test */
    public function admin_can_update_settings()
    {
        $response = $this->actingAs($this->user)
                         ->post(route('admin.settings.update'), [
                             'site_name_en' => 'Test Site',
                             'site_name_ar' => 'موقع اختبار',
                             'site_email_en' => 'test@example.com',
                             'site_email_ar' => 'test@example.com',
                         ]);
        
        $response->assertStatus(302); // Redirect back
        $response->assertSessionHas('success');
    }
}