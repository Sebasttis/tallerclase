<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de trabajos</h1>

    @foreach ($profe as $profesor)
    <tr>
        <br>
        <td>{{$profesor->cedula}}</td>
        <td>{{$profesor->nombre}}</td>
        <td>{{$profesor->direccion}}</td>
        <td>{{$profesor->telefono}}</td>
        
        <td><a href="{{route('profesor.edit',$profesor->id)}}">Editar</a></td>
        <td><a href="{{route('profesor.show',$profesor->id)}}">Detalle</a></td>
        <form action="{{route('profesor.destroy',$profesor->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>