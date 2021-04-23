<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="{{ route('index') }}" class="font-weight-bold text-success text-uppercase">Listar Produtos</a>
                </div>
            <div class="content">
                <div class="title m-b-dl">
                    <h1>
                    <span class="text-success font-weight-bold display-1">
                    Products
                    </span>
                </div>
                <h2>Cadastro de Produtos</h2>

    <a
        href="{{'add'}}"
        class="btn btn-primary col-sm-6 mt-2 mr-1 font-weight-bold text-uppercase"
    >
        Adicionar Produto
    </a>
            </div>
        </div>
    </body>
</html>
