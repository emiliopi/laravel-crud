pagina para editar un empleado

<form action="{{ url() }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    <br>
    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">
    <br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="{{ $empleado->Correo }}">
    <br>
    <label for="Foto">{{'Foto'}}</label>
    <br>
    {{ $empleado->Foto }}
    <br>
    <input type="submit" name="Foto" id="Foto" value="Editar">
</form>