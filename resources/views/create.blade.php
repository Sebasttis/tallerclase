<form action="{{route('profesor.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
        Cedula:
        <br>
        <input type="text" name="cedula">
    </label>
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        Direccion:
        <br>
        <input type="text" name="direccion">
    </label>
    <br>
    <label>
        Telefono:
        <br>
        <input type="text" name="telefono">
    </label>
   
    <br>
   
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>