<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\localizacao;
use Illuminate\Http\Request;

class LocalizacaoController extends Controller
{
    public function getAllLocalizacao() {
        $localizacoes = localizacao::get()->toJson(JSON_PRETTY_PRINT);
        return response($localizacoes, 200);
    }

    public function getLocalizacao($id) {
        if (localizacao::where('id', $id)->exists()) {
            $localizacao = localizacao::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($localizacao, 200);
        } else {
            return response()->json([
                "message" => "Não foi encontrado esse ID de localização"
            ], 404);
        }
    }

    public function postLocalizacao(Request $request) {
        $localizacao = new localizacao();
        $localizacao->latitude = $request->latitude;
        $localizacao->longitude = $request->longitude;
        $localizacao->user_id = $request->user_id;
        $localizacao->save();

        return response()->json([
            "message" => "Localização inserida"
        ], 201);
    }
}
