<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('lecciones.store') }}" method="POST">
    @csrf
    <input type="text" name="nombreLeccion" placeholder="Nombre de la Lección">
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <input type="number" name="nivel" placeholder="ID del Nivel">
    <button type="submit">Guardar</button>
</form>

</body>
</html>