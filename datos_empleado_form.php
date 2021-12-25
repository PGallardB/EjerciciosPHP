<?php 
/* Programa que pida los siguientes datos de un empleado:
dni (caja de texto), apellidos (caja de texto), nombre (caja de texto), sueldo (caja de texto),
categoria: analista, programador, operador (radio button)
reduccion de jornada: (checkbox)
jefe de proyecto: (checkbox)
conocimientos: (lista múltiple) java, php, asp, c
departamento: (lista normal) desarrollo, administracion, contabilidad
formacion: (lista desplegable) universitaria, FP superior, bachillerato
Los datos se enviarán a una página php que mostrará los datos.*/
?>

<html>
<body>

<form action="datos_empleado.php" method="post">
dni: <input type="text" name="dni"><br>
Apellidos: <input type="text" name="apellidos"><br>
Nombre: <input type="text" name="nombre"><br>
Sueldo: <input type="text" name="sueldo"><br>
Categoria: 
<input type="radio" name="categoria"><label for="categoria">Analista</label>
<input type="radio" name="categoria"><label for="categoria">Programador</label>
<input type="radio" name="categoria"><label for="categoria">Operador</label><br/>
Reduccion de jornada: <input type="checkbox" name="reduccion"><br/>
Jefe de proyecto: <input type="checkbox" name="jefe"><br/>
Conocimientos:
<select name="conocimientos">
<option value="java">Java</option>
<option value="php" selected>PHP</option>
<option value="asp">ASP</option>
<option value="c">C</option>
</select><br>
Departamento:
<select name="departamento">
<option value="desarrollo">Desarrollo</option>
<option value="administracion" selected>Administracion</option>
<option value="contabilidad">Contabilidad</option>
</select><br>
Formacion:
<select name="formacion">
<option value="universitaria">Universitaria</option>
<option value="fp" selected>FP Superior</option>
<option value="bachillerato">Bachilletato</option>
</select><br>

<input type="submit">
</form>

</body>
</html>

