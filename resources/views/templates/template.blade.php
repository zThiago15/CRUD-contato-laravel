<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <script src="{{url('assets/js/script.js')}}"></script>

</head>
<body>

    <header>
        <nav>
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="/contatos-view">Contato</a> </li>
                <li> <a href="/cadastrar-contato-view">Cadastrar contato</a> </li>
                <li> <a href="/quemsomos">Quem somos</a> </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p> Todos os direitos reservados! </p>
    </footer>

</body>
</html>
