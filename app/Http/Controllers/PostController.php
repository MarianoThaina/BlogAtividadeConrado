<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'titulo' => 'Post 1']
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'mensagem' => 'Post criado com sucesso',
            'dados' => $request->all()
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'mensagem' => 'Post atualizado com sucesso',
            'id' => $id,
            'dados' => $request->all()
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'mensagem' => 'Post deletado com sucesso',
            'id' => $id
        ]);
    }
}
