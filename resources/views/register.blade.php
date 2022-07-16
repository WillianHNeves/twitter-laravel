

<body>
    @extends('layouts.app')

    @section('content')

    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="mb-4">Cadastro</h1>

        <form action="/signup" method="post" class="d-flex flex-column">
            @csrf
            <p> <input name="name" placeholder="Nome" class="form-control mb-1">
            <p> <input type="email" name="email" placeholder="E-mail" class="form-control mb-1">
            <p> <input type="password" name="password" placeholder="Senha" class="form-control mb-1">
            <p> <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
    @endsection