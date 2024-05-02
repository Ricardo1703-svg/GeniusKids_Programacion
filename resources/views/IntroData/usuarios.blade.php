<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/css/app.css">
    <link rel = "stylesheet" href = "/css/formu.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>
    <center>
        <h1>Registro de Usuario</h1>
        @include('includes.botones')
    </center>
    <form method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>
    <br>

    <label for="nivel_educativo">Nivel Educativo:</label>
    <input type="text" id="nivel_educativo" name="nivel_educativo">
    <br>

    <button type="submit">Guardar</button>
    </form>

</body>
@include('includes.footer')
</html>