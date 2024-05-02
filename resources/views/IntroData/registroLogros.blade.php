<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('logros.store') }}" method="POST">
    @csrf
    <input type="date" name="Fecha_Logro" placeholder="Fecha del Logro">
    <input type="number" name="ID_Actividad" placeholder="ID de la Actividad">
    <button type="submit">Guardar</button>
</form>

</body>
</html>