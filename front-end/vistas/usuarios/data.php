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
          <th>NOMBRES</th>
          <th>EMAIL</th>
          <th>PASSWORD</th>
          <th>TIPO</th>
          <th>ESTARUS</th>
          <th>FOTO</th>
          <th>Editar</th>
          <th>Borrar</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $resultado = $usuarios->obtener_too();

        foreach ($resultado as $usu) {

        ?>
          <tr>
            <td> <?php echo $usu->id ?> </td>
            <td> <?php echo $usu->nombre ?> </td>
            <td><?php echo $usu->email ?> </td>
            <td><?php echo $usu->passw ?> </td>
            <td><?php echo $usu->tipo ?></td>
            <td><?php echo $usu->estatus ?></td>
            <td><img src="../../../back-end/images/usuarios/<?php echo $usu->foto ?>" alt="foto de personal" width="150" height="150"></td>
            <td> <a href="index.php?editar&id= <?php echo $usu->id ?>"> Editar </a> </td>
            <td><a href="index.php?borrar&id= <?php echo $usu->id ?>"> Borrar </a></td>
          </tr>
        <?php

        }
        ?>



      </tbody>
    </table>
  </div>
  </main>
  </div>