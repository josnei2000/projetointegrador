<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MenuTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     protected function setUp(): void
     {
       parent::setUp();

       $this->post('/register', [
         'name' => 'josnei mis',
         'email' => 'josneimis01@gmail.com',
         'password' => 'senhasecreta123',
         'password_confirmation' => 'senhasecreta123',
         'cpf' => '12345678911',
         'phone' => '36387070',
         'address' => 'rua 7 de setembro',
         'company_name' => 'restaurante bom sabor LTDA',
         'trading_name' => 'bom sabor',
         'cnpj' => '123456789',
         'type' => 'gerente'
       ]);
       $user = User::where('email', 'josneimis01@gmail.com')->first();
       $this->actingAs($user);

     }
       public function test_shouldnt_create_menu_when_invalid_data()
       {
         $response = $this->post('/menu');
         $response->assertRedirect()
          ->assertInvalid(['name','description']);


       }
  }
