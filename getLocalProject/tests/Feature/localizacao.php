<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class localizacao extends TestCase
{
    /**
     * Testando a rota de /api/localizacao.
     *
     * @return void
     */
    public function apiLocalizacao()
    {
        $response = $this->get('/api/localizacao');

        $response->assertJson([]);

        $response->assertStatus(200);
    }
}
