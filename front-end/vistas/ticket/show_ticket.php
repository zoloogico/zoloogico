<?php
if (isset($_REQUEST['id']) && isset($_REQUEST['borrar'])) {
  $ticket->id = $_REQUEST['id'];
  $resultado = $ticket->obtener_id();
  $tic = $resultado[0];

?>

<h2>BORRAR DE DATOS </h2>
<form action="../../../back-end/controladores/ticket_controlador.php"  method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  <input type="hidden" name="opcion" value="3">
  <div class="form-row">

    <div class="col-md-6 mb-3">
      <label for="validationCustom01">id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01"  value="<?php echo $tic->id?>" readonly>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02" maxlength="20" pattern="[A-Za-z]{1,20}"  
      value="<?php echo $tic->nombre?>" disabled>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Precio</label>
      <input type="number" class="form-control" name="id_Habitat" id="validationCustom02" maxlength="20" 
      value="<?php echo $tic->precio?>"  disabled>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Descripcion</label>
      <input type="text" class="form-control" name="descripcion" id="validationCustom02"  pattern="[A-Za-z]{1,20}"  
      value="<?php echo $tic->descripcion?>" disabled>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
    
    <div class="col-md-2 mb-3">
        <img src="" alt="foto de personnal">
        <label for="validationCustom03"><?php echo $tic->foto  ?> </label>

      </div>
  </div>
  
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>

<?php
}
?>