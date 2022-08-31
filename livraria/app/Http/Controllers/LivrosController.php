<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    //criar
    public function create()
    {
        return view('livros.create');
    }

    //salvar
    public function store(Request $request) //Request: recebe os dados
    {
        //chamando o model para poder salvar
        Livro::create([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);

        return "Livro salvo com sucesso!";

    }

    //listagem (read)
    public function show()
    {
        $livros = Livro::all();

        return view('livros.todos', ['livros'=>$livros]);
        //['passando dados para a view']
    }

    public function destroy($id)
    {
        //chamando o model para poder salvar
        //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)
        $livro = Livro::findOrFail($id);

        $livro->delete();

        return "Livro excluído com sucesso";
    }

    public function edit($id)
    {
        //chamando o model para poder editar
        //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)
        $livro = Livro::findOrFail($id);

        return view('livros.editar', ['livro' => $livro]);
        //[mandando os dados do $livro para a view]
    }

    public function update(Request $request, $id) //Request: recebe os dados
    {
        //chamando o model para poder fazer o update
        //findOrFail(): tenta encontrar, caso não encontre vai mostrar uma falha (404 not found)
        $livro = Livro::findOrFail($id);

        $livro->update([
            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);

        return "Livro atualizado com sucesso!";

    }

}
