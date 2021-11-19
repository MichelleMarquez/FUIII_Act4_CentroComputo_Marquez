<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$numcontrol=$_POST['numcontrol'];
$correo=$_POST['correo'];
$fechareg=$_POST['fechareg'];

$sql="UPDATE centro SET  nombre='$nombre',paterno='$paterno', materno='$materno', numcontrol='$numcontrol', correo='$correo', fechareg= '$fechareg'
 WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: centro.php");
    }
?>