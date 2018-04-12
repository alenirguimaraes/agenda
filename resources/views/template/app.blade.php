<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>WebAgenda by Alenir </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebAgenda</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">In&iacute;cio</a>
            </li>
            <li>
                <a href="{{ url('pessoas') }}">Listar</a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contato
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('pessoas/novo') }}">Novo</a></li>
                    <li><a href="{{ url('pessoas/novo') }}">Alterar</a></li>
                    <li><a href="{{ url('pessoas/novo') }}">Excuir</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
@yield('content')
</div>
</body>
</html>