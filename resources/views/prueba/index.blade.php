<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Tabla dueños</h1>

   <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>