<?php
include("conexion.php");
$result=$mysqli->query("select nombre, edad , semestre from estudiante");
while($fila=$result->fetch_array())
{
  echo $fila[1] . " - ". $fila[0] . " - " . $fila[2] . "<br>";
}
?>