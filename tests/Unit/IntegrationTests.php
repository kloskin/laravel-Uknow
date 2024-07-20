<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class IntegrationTests extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_registration_and_login_integration()
    {
        // Rejestracja użytkownika
        $registrationResponse = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    
        $registrationResponse->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po rejestracji
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com',
        ]); // Sprawdza, czy użytkownik został zapisany w bazie danych
    
        // Logowanie użytkownika
        $loginResponse = $this->post('/login', [
            'email' => 'johndoe@example.com',
            'password' => 'password',
        ]);
    
        $loginResponse->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po zalogowaniu
        $this->assertAuthenticated(); // Sprawdza, czy użytkownik jest zalogowany
    }
    public function test_profile_update_integration()
    {
        // Rejestracja i logowanie użytkownika
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->actingAs($user);

        // Aktualizacja profilu
        $updateResponse = $this->post('/profile', [
            'name' => 'John Updated',
            'email' => 'johnupdated@example.com',
        ]);

        $updateResponse->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po aktualizacji
        $this->assertDatabaseHas('users', [
            'email' => 'johnupdated@example.com',
            'name' => 'John Updated',
        ]); // Sprawdza, czy dane użytkownika zostały zaktualizowane w bazie danych
    }
    public function test_game_result_and_statistics_integration()
    {
        $user = User::factory()->create();
        $game = Game::factory()->create();

        // Logowanie użytkownika
        $this->actingAs($user);

        // Dodanie wyniku gry
        $gameResultResponse = $this->post('/game-results', [
            'game_id' => $game->id,
            'score' => 100,
        ]);

        $gameResultResponse->assertStatus(302); // Sprawdza, czy użytkownik został przekierowany po dodaniu wyniku
        $this->assertDatabaseHas('game_results', [
            'user_id' => $user->id,
            'game_id' => $game->id,
            'score' => 100,
        ]); // Sprawdza, czy wynik gry został zapisany w bazie danych

        // Sprawdzenie aktualizacji statystyk gry
        $this->assertDatabaseHas('game_statistics', [
            'game_id' => $game->id,
            'total_plays' => 1,
            'average_score' => 100,
            'best_score' => 100,
        ]); // Sprawdza, czy statystyki gry zostały zaktualizowane w bazie danych
    }

}
