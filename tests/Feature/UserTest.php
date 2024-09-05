<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     public function test_set_database_config(): void
     {
        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');
        
        $response = $this->get('/');
        $response->assertStatus(200);
     }

    public function test_get_user_list(): void
    {
        $response = $this->get('/users');
        $response->assertStatus(200); //Comprobar que la ruta funciona correctamente
        $response->assertJsonStructure([
            ['id','name','email', 'email_verified_at', 'created_at', 'updated_at']
        ]); //comprobar al estructura de datos Json
        
        $response->assertJsonFragment(['name' => 'Eric']); //Comprobar que en la lista hay un nombre Eric
        $response->assertJsonCount(4); // Comprobar que el get devolverá 4 usuarios
    }

    public function test_get_user_detail(): void
    {
        $response = $this->get('/users/1');
        $response->assertStatus(200);
        $response->assertJsonStructure(['id','name','email', 'email_verified_at', 'created_at', 'updated_at']);
        $response->assertJsonFragment(['name' => 'Eric']);
    }

    public function test_get_not_existing_user_detail(): void
    {
        $response = $this->get('/users/520');
        $response->assertStatus(404);
    }
}
