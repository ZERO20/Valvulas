<?php
include "conexion.php";
$contador=0;
$consulta="SELECT * FROM Usuarios WHERE usuario='".$_POST['usuario']."' AND password = '".$_POST['password']."'";
$resultado=mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if ($filas==0){
    echo '<SCRIPT language="JavaScript">
    alert("DATOS INCORRECTOS, FAVOR DE VERIFICAR USUARIO Y/O PASSWORD ");
    window.location="../index.html";
    </script>';
}
if ($filas>0) {
    header ('Location: ../panel.php');
}
?>