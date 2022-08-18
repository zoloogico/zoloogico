

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
   <h2>Section title</h2>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th>ID</th>
          <th>ClaveTransaccion</th>
          <th>PaypalDatos</th>
          <th>Correo</th>
          <th>Fecha</th>
          <th>Total</th>
          <th>Estatus</th>

        </tr>
      </thead>
      <tbody>

        <?php
        $resultado = $ventas->obtener_too();

        foreach ($resultado as $ven) {

        ?>
          <tr>
            <td> <?php echo $ven->id ?> </td>
            <td> <?php echo $ven->claveTransaccion ?> </td>
            <td><?php echo $ven->paypalDatos ?> </td>
            <td><?php echo $ven->fecha ?> </td>
            <td> <?php echo $ven->correo ?> </td>
            <td> <?php echo $ven->total ?> </td>
            <td><?php echo $ven->estatus ?> </td>

          </tr>

        <?php

        }
        ?>



 
