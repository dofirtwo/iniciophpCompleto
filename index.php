<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="respuesta.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="txtnombre" id="txtnombre" required placeholder="Ingrese su nombre">
        <label for="">Codigo</label>
        <input type="num" name="txtcodigo" id="txtcodigo" required placeholder="Ingrese un codigo">

        <label for="selCiudad">Ciudad:</label>
        <select name="selCiudad" id="selCiudad">
            <option value="Bogota">Bogota</option>
            <option value="Neiva">Neiva</option>
            <option value="Barranquilla">Barranquilla</option>
            <option value="Tunja">Tunja</option>
            <option value="Choco">Choco</option>
        </select>

        <br>
        <label for="radJornada">Jornada</label>
        <input type="radio" name="radJornada" id="radJornada" value="mañana">
        <label for="">mañana</label>
        <input type="radio" name="radJornada" id="radJornada" value="tarde">
        <label for="">tarde</label>
        <input type="radio" name="radJornada" id="radJornada" value="noche">
        <label for="">noche</label>

        <br>
        <label for="">Dias de Trabajo</label>
        <input type="checkbox" name="chkDias[]" id=""value="lunes">
        <label for="">Lunes</label>
        <input type="checkbox" name="chkDias[]" id=""value="martes">
        <label for="">Martes</label>
        <input type="checkbox" name="chkDias[]" id=""value="miercoles">
        <label for="">Miercoles</label>
        <input type="checkbox" name="chkDias[]" id=""value="jueves">
        <label for="">Jueves</label>
        <input type="checkbox" name="chkDias[]" id=""value="viernes">
        <label for="">Viernes</label>
        <input type="checkbox" name="chkDias[]" id=""value="sabado">
        <label for="">Sabado</label>
        <input type="checkbox" name="chkDias[]" id=""value="domingo">
        <label for="">Domingo</label>

        <!-- <input type="number" name="edad" id="edad" required placeholder="Ingrese la edad"> -->
        <input type="submit" value="registrar">
    </form>
</body>
</html>