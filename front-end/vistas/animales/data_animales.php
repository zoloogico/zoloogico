

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
   <h2>Area de especies</h2>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th>codanimal</th>
          <th>nombreanimal</th>
          <th>tipoHabitat</th>
          <th>dieta</th>
          <th>Foto</th>
          <th>Editar</th>
          <th>Borrar</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $resultado = $animales->obtener_too();

        foreach ($resultado as $ani) {


        ?>
          <tr>
            <td> <?php echo $ani->codanimal ?> </td>
            <td> <?php echo $ani->nombreanimal ?> </td>
            <td><?php echo $ani->id_Habitat ?> </td>
            <td><?php echo $ani->dieta ?> </td>
            <td><img src="../../../back-end/images/animales/<?php echo $ani->foto ?>" alt="foto de animales" width="150" height="150"></td>
            <td> <a href="index.php?editar&codanimal= <?php echo $ani->codanimal ?>"> Editar </a> </td>
            <td><a href="index.php?borrar&codanimal= <?php echo $ani->codanimal ?>"> Borrar </a></td>

          </tr>

        <?php

        }
        ?>



 
