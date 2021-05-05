pagina para editar un empleado

<form action="" method="post">
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">
    <br>
    <label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="">
    <br>
    <label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="">
    <br>
    <label for="Correo">{{'Correo'}}</label>
    <input type="email" name="Correo" id="Correo" value="">
    <br>
    <label for="Foto">{{'Foto'}}</label>
    <input type="file" name="Foto" id="Foto" value="">
</form>