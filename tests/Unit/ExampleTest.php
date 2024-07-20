<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }


    public function test_user_registration_successful()
    {aaaaaaaaaaaa
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

}
