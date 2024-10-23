<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clubes</title>
</head>

<body>
    <div class="container text-center">
        <br>
        <div class="btn-group">
            <a class="btn btn-success btn-lg" href="{{ route('competicao.create') }}">+    Competições</a>
            <a class="btn btn-info btn-lg" href="{{ route('index.list') }}">Ver Ranking</a>
        </div>
        <br>
    </div>

    <style>
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px; /* Define um espaço consistente entre os botões */
        }

        .btn-group .btn {
            padding: 15px 30px; /* Ajuste de padding para tornar os botões mais robustos */
        }

        /* Efeito de hover para melhorar a interatividade */
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px); /* Leve efeito de flutuação ao passar o mouse */
            transition: all 0.2s ease-in-out;
        }

        /* Efeito para tornar os botões mais dinâmicos */
        .btn:active {
            transform: translateY(0); /* Volta ao estado normal ao clicar */
            transition: all 0.1s ease-in-out;
        }
    </style>
</body>

</body>
<div class="container">
    <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Competição</th>
                <th scope="col" class="text-center">Pontos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($competicoes as $competicao)
                <tr>
                    <th scope="row" class="text-center">{{ $competicao->id }}</th>
                    <td>{{ $competicao->nome }}</td>
                    <td class="text-center">
                       {{$competicao->pontuacao}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

</body>

</html>