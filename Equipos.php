
<?php
include "php/conexion.php";
$consulta="SELECT * FROM Equipos";
$resultado=mysqli_query($conexion,$consulta);

$consulta3="SELECT * FROM  Zona";
$resultado3=mysqli_query($conexion,$consulta3);



?>




<?php include "cabeza.inc"; ?>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" >AGREGAR EQUIPO</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        <h4 class="modal-title" id="myModalLabel">AGREGAR EQUIṔO</h4>
      </div>
      <div class="modal-body">
    <form action="php/altaEquipo.php" method="post">
        <input type="text" placeholder="SAP" name="sap" class="form-control" ><br>
        <input type="text" placeholder="EQUIPO" name="equipo" class="form-control" ><br>
        <select name="zona" class="form-control">
            <?php 
            while ($fila=mysqli_fetch_array($resultado3)){ ?>
            <option value=<?php echo $fila['id']?>><?php echo $fila['bateria'] ?></option>
            <?php 
            } 
             ?>
            
        </select>

        <input type="submit" >






    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div></br></br></br>

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