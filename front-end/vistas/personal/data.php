<?php

//print_r($registros);
if(isset($_GET['mensaje'])){
?>
   <div class="alert alert-info alert-dismissible fade show" role="alert">
     <strong> <?php  echo $_GET['mensaje'];   ?> </strong> 
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
<?php
   
}
?>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th>ID</th>
          <th>Apellidos</th>
          <th>Nombres</th>
          <th>Genero</th>
          <th>Estatus</th>
          <th>Foto</th>
          <th>Editar</th>
          <th>Borrar</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $resultado = $personal->obtener_too();

        foreach ($resultado as $perso) {


        ?>
          <tr>
            <td> <?php echo $perso->id ?> </td>
            <td> <?php echo $perso->apellidos ?> </td>
            <td><?php echo $perso->nombres ?> </td>
            <td><?php echo $perso->genero ?> </td>
            <td><?php echo $perso->estatus ?></td>
            <td><img src="../../../back-end/images/personal/<?php echo $perso->foto ?>" alt="foto de personal" width="150" height="150"></td>
            <td> <a href="index.php?editar&id= <?php echo $perso->id ?>"> Editar </a> </td>
            <td><a href="index.php?borrar&id= <?php echo $perso->id ?>"> Borrar </a></td>
          </tr>
        <?php

        }
        ?>



      </tbody>
    </table>
  </div>
  </main>
  </div>