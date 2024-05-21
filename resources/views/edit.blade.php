<form action="{{route('profesor.update', $profesor)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Cedula:
    <br>
    <input name="cedula" type="text" value="{{old('cedula',$profesor->cedula) }}">
    <br>
    </label>
    <br>
    <label>
    Nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$profesor->nombre)}}">
    <br>
    </label>
    <br>
    <label>
    Telefono:
    <br>
    <input name="direccion" type="text" value="{{old('direccion',$profesor->direccion)}}">
    <br>
    </label>
    <br>
    <label>
    Direccion:
    <br>
    <input name="telefono" type="text" value="{{old('telefono',$profesor->telefono)}}">
    <br>
    </label>
    <br>
   
    <button  type="submit">Actualizar</button>
   
</form>