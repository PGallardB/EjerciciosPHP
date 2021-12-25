<!--Crear un formulario que pida la siguiente información:
- Apellidos
- Nombre
- Provincia
- Familia Numerosa (si o no)
- Estado civil. Una de las opciones siguientes: Casado, Divorciado, Soltero, Separado
Crear una página php que recoja los datos anteriores y los muestre.-->

<html>
<body>

<form action="formulario.php" method="post">
Apellidos: <input type="text" name="apellidos"><br>
Nombre: <input type="text" name="nombre"><br>
Provincia: <input type="text" name="provincia"><br>
Familia Numerosa: <input type="radio" value="Si" value="Si" name="familia"><label for="Si">Si</label><input type="radio" value="No" value="No" name="familia"><label for="No">No</label><br>
Estado Civil:  

<select name="estado">
  <option value="Casado">Casado</option>
  <option value="Divorciado" selected>Divorciado</option>
  <option value="Soltero">Soltero</option>
   <option value="Separado">Separado</option>
</select><br>


<input type="submit">
</form>

</body>
</html>
