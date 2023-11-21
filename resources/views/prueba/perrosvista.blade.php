<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Tabla de Dueños con Perros</h1>
<table>
    <thead>
        <tr>
            <th>ID Dueño</th>
            <th>Nombre Dueño</th>
            <th>ID Perro</th>
            <th>Nombre Perro</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dueñoperro as $dueño)
            @foreach($dueño->perros as $perro)
                <tr>
                    <td>{{ $dueño->id }}</td>
                    <td>{{ $dueño->nombre }}</td>
                    <td>{{ $perro->id }}</td>
                    <td>{{ $perro->nombre }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

</body>
</html>