<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\AlunoService;

class AlunoController extends Controller
{
    public function __construct(AlunoService $alunoService)
    {
        $this->alunoService = $alunoService;
    }

    public function listarAlunos() {
        try {
            $data = $this->alunoService->listarAlunos();

            return view('alunos')->with(compact('data'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

    }
}
