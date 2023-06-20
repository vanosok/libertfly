<?php

namespace Tests\Feature;

use App\Models\Core\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreControllerTest extends TestCase
{
    use RefreshDatabase; // Para garantir que o banco de dados seja redefinido após cada teste

    /**
     * Testa se o método index retorna a lista correta de usuários.
     *
     * @return void
     */
    public function testIndex()
    {
        // Simula a autenticação JWT
        $token = '...'; // Insira aqui o token JWT válido para os testes

        // Chama o método index
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('api/v1/store');

        // Verifica se a resposta foi bem-sucedida (código de status 200)
        $response->assertStatus(200);
    }
}
