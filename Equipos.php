<?php
include "php/conexion.php";
$consulta="SELECT * FROM Equipos";
$resultado=mysqli_query($conexion,$consulta);
?>
<?php include "cabeza.inc"; ?>
<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>SAP</th>
        <th>EQUIPO</th>
        <th>ZONA</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        <th>DETALLE</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>SAP</th>
        <th>EQUIPO</th>
        <th>ZONA</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        <th>DETALLE</th>
    </tr>
    </tfoot>
    <tbody>
<?php
while ($fila=mysqli_fetch_array($resultado)){
    $consulta2="SELECT * FROM Zona WHERE id=".$fila['zona']."";
    $resultado2=mysqli_query($conexion,$consulta2);
    while ($fila2=mysqli_fetch_array($resultado2)){
        $zona = $fila2['bateria'];
    }
    ?>
            <tr>
                <td><?php echo $fila['sap']; ?></td>
                <td><?php echo $fila['equipo']; ?></td>
                <td><?php echo $zona; ?></td>
                <td><a href=""><button>EDITAR</button></a></td>
                <td><a href=""><button>ELIMINAR</button></a></td>
                <td><a href=""><button>DETALLE</button></a></td>
            </tr>
<?php } ?>
    </tbody>
    </table>
<?php include "pie.inc"; ?>