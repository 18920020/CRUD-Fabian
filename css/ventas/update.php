<?php
include("../config.php");
include("../session.php");

$id = $_POST['id'];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$descripcion = $_POST['descripcion'];
$fechaventa = $_POST['fechaventa'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE ventas SET id_venta='$id',producto='$producto', marca='$marca', descripcion='$descripcion', fechaventa='$fechaventa', precio='$precio', cantidad='$cantidad' 
WHERE id_venta='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="ventas.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="ventas.php";';
	echo '</script>';
}
?>