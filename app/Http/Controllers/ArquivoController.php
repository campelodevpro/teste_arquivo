<?php

namespace App\Http\Controllers;

use App\Models\Arquivo;
use Illuminate\Http\Request;

class ArquivoController extends Controller
{

    public function index()
    {
        return view('upload');
    }
    //
    public function store(Request $request)
    {
        // $request->validate([
        //     'arquivo' => 'required|mimes:pdf,docx,xlsx|max:2048',
        // ]);
        // ... (código de validação e armazenamento do arquivo)
        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file('arquivo');
            $nomeArquivo = time().'_'.$arquivo->getClientOriginalName();
        
            // ... (código para armazenar o arquivo)
            $arquivo->storeAs('uploads', $nomeArquivo);
            Arquivo::create([
                'nome_original' => $nomeArquivo,
                'caminho' => 'uploads/' . $nomeArquivo,
            ]);
        } else {
            // ... (código para lidar com o caso em que nenhum arquivo foi enviado)
        }

        // ...
    }
}
