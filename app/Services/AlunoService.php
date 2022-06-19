<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AlunoService
{
    public function listarAlunos() {
        try {
            $response = Http::get(env('URL_API').'api/v1/listar/alunos');

            return $response->json();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
