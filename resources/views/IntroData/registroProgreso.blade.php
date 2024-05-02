<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('progreso.store') }}" method="POST">
    @csrf
    <input type="number" name="usuario" placeholder="ID del Usuario">
    <input type="number" name="leccion" placeholder="ID de la Lección">
    <input type="number" name="puntuacion" placeholder="Puntuación">
    <input type="date" name="fechaCompletada" placeholder="Fecha Completada">
    <button type="submit">Guardar</button>
</form>

</body>
</html>