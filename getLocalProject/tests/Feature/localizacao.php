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
    public function getApiLocalizacao()
    {
        $response = $this->get('/api/localizacao');

        $response->assertJson([]);

        $response->assertStatus(200);
    }
}
