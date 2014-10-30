<?php
include "conexion.php";


$consulta = "INSERT INTO Equipos VALUES (NULL,'".$_POST['sap']."','".$_POST['equipo']."','".$_POST['zona']."')";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);

    echo '<SCRIPT language="JavaScript">
    alert("DATOS GUARDADOS CORRECTAMENTE");
    </script>';
    header ('Location: ../Equipos.php');
?>