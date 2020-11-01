<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class localizacao extends TestCase
{
    /**
     * Testando a rota GET /api/localizacao.
     *
     * @return void
     */
    public function testGetApiLocalizacao()
    {
        $response = $this->get('/api/localizacao');

        $response->assertJson([]);

        $response->assertStatus(200);
    }

    /**
     * Testando a rota GET /api/localizacao/{id}.
     *
     * @return void
     */
    public function testGetApiLocalizacaoId()
    {
        $this->testPostApiLocalizacao();

        $response = $this->get('/api/localizacao/1');

        $response->assertJson([]);

        $response->assertStatus(200);
    }

    /**
     * Testando a rota GET /api/localizacaoUser/{id}.
     *
     * @return void
     */
    public function testGetApiLocalizacaoUserId()
    {
        $this->testPostApiLocalizacao();

        $response = $this->get('/api/localizacaoUser/1');

        $response->assertJson([]);

        $response->assertStatus(200);
    }

    /**
     * Testando a rota POST /api/localizacao.
     *
     * @return void
     */
    public function testPostApiLocalizacao()
    {
        $response = $this->post('/api/localizacao?latitude=111111111&longitude=22222222&user_id=1');

        $response->assertJson([
            "message" => "Localização inserida"
        ]);

        $response->assertStatus(201);
    }
}
