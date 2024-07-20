<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnitTests extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_registration_successful()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po rejestracji
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com',
        ]); // Sprawdza, czy użytkownik został zapisany w bazie danych
    }
    public function test_user_registration_password_confirmation_mismatch()
    {
        $response = $this->post('/register', [
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'wrongpassword',
        ]);
        $response->assertSessionHasErrors(['password']); // Sprawdza, czy pojawił się błąd walidacji hasła
        $this->assertDatabaseMissing('users', [
            'email' => 'janedoe@example.com',
        ]); // Sprawdza, czy użytkownik nie został zapisany w bazie danych
    }
    public function test_user_login_successful()
    {
        // Najpierw tworzymy użytkownika w bazie danych
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po zalogowaniu
        $this->assertAuthenticatedAs($user); // Sprawdza, czy użytkownik jest zalogowany
    }

}
