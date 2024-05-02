<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/css/formu.css">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="{{ route('usuarios.index') }}" class="btn primary">Usuarios</a>
    <a href="{{ route('actividades.index') }}" class="btn primary">Actividades</a>
    <a href="{{ route('lecciones.index') }}" class="btn primary">Lecciones</a>
    <a href="{{ route('logros.index') }}" class="btn primary">Logros</a>
    <a href="{{ route('niveles.index') }}" class="btn primary">Niveles</a>
    <a href="{{ route('progreso.index') }}" class="btn primary">Progreso</a>

</body>
</html>