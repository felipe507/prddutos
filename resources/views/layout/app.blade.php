<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='{{ asset("css/app.css") }}' rel="stylesheet">
    <title>Cadastro Produtos</title>
    <meta name='csrf-token" content="{{ csrf_token() }}'>
    <style>
        body{
            padding: 20px;
        }
        .navbar{
            margin-botton: 20px;
        }
    </style>
</head>
<body>
    <div class='container'>
        @component('navbar', ['current' => $current])
            
        @endcomponent

        <main role="main">
            @hasSection ('body')
                @yield('body')
            @endif
        </main>
    </div>
    <script src='{{ asset("js/app.js") }}'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @hasSection ('javascript')
        @yield('javascript')
    @endif


</body>
</html>