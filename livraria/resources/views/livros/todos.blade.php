<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine de livros</title>
</head>
<body>
    
    <table>
        <tr>
            <th>ISBN</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Preço</th>
            <th></th>
            <th></th>

            @foreach($livros as $livro)

                <tr>
                    <td>{{ $livro->isbn }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->nome }}</td>
                    <td>{{ $livro->preco }}</td>
                    <td>
                        <a href="{{ route('editar_livro', ['id'=>$livro->id]) }}" title="Editar livro {{ $livro->nome }}">Editar</a>

                    </td>
                    <td>
                        <a href="{{ route('excluir_livro', ['id'=>$livro->id]) }}" title="Excluir livro {{ $livro->nome }}">Excluir</a>
                    </td>
                </tr>

            @endforeach

        </tr>
    </table>

</body>
</html>