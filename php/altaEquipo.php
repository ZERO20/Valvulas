<?php
include "conexion.php";
$consulta = "INSERT INTO Zona VALUES (NULL,'".$_POST['sap']."','".$_POST['equipo']."','".$_POST['zona']."')";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if ($filas==0){
    echo '<SCRIPT language="JavaScript">
    alert("NO SE PUDIERON GUARDAR LOS DATOS");
    window.location="../index.html";
    </script>';
}
if ($filas>0) {
    echo '<SCRIPT language="JavaScript">
    alert("DATOS GUARDADOS CORRECTAMENTE");
    </script>';
    header ('Location: ../index.html');
}
?>