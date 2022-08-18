

<?php

//print_r($registros);
if(isset($_GET['mensaje'])){
?>
   <div class="alert alert-primary alert-dismissible fade show" role="alert">
     <strong> <?php  echo $_GET['mensaje'];   ?> </strong> 
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
<?php
   
}
?>
   <h2>Mostra datos </h2>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th>ID</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Descripcion</th>
          <th>Foto</th>
          <th>Editar</th>
          <th>Borrar</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $resultado = $ticket->obtener_too();

        foreach ($resultado as $tic) {


        ?>
          <tr>
            <td> <?php echo $tic->id ?> </td>
            <td> <?php echo $tic->nombre ?> </td>
            <td><?php echo $tic->precio ?> </td>
            <td><?php echo $tic->descripcion ?> </td>
            <td><img src="../../../back-end/images/ticket/<?php echo $tic->foto ?>" alt="foto " width="150" height="150"></td>
            <td> <a href="index.php?editar&id= <?php echo $tic->id ?>"> Editar </a> </td>
            <td><a href="index.php?borrar&id= <?php echo $tic->id ?>"> Borrar </a></td>

          </tr>

        <?php

        }
        ?>



 
