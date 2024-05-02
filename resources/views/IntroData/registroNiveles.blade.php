<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('niveles.store') }}" method="POST">
    @csrf
    <input type="text" name="nombreNivel" placeholder="Nombre del Nivel">
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <input type="text" name="imagen" placeholder="URL de la Imagen">
    <button type="submit">Guardar</button>
</form>

</body>
</html>