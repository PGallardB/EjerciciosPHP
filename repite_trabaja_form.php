<!--Crer un formulario con dos checkbox: repite y trabaja. En el caso de estar chequeado debe mandar
un valor true. El formulario llamará a una página php que mostrará los textos “Trabaja y Repite”, “No
trabaja y Repite”, “Trabaja y No repite”, “No trabaja y No repite”.-->

<html>
<body>

<form action="repite_trabaja.php" method="post">
Repite: <input type="checkbox" name="repite"><br>
Trabaja: <input type="checkbox" name="trabaja"><br>
<input type="submit">
</form>

</body>
</html>