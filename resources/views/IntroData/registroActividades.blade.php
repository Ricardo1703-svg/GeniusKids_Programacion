<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('actividades.store') }}" method="POST">
    @csrf
    <input type="text" name="Tipo_Actividad" placeholder="Tipo de Actividad">
    <textarea name="Descripcion" placeholder="Descripción"></textarea>
    <input type="number" name="Edad_Recomendada" placeholder="Edad Recomendada">
    <button type="submit">Guardar</button>
</form>

</body>
</html>