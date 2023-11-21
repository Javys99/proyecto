<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($perros as $perro)
            <tr>
                <td>{{ $perro->id }}</td>
                <td>{{ $perro->nombre }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>