<?php
if (isset($_REQUEST['codanimal']) && isset($_REQUEST['borrar'])) {
  $animales->codanimal = $_REQUEST['codanimal'];
  $resultado = $animales->obtener_id();
  $ani = $resultado[0];

?>

<h2>Borrar </h2>
<form action="../../../back-end/controladores/Animal_controladores.php"  method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  <input type="hidden" name="opcion" value="3">
  <div class="form-row">

    <div class="col-md-6 mb-3">
      <label for="validationCustom01">codanimal</label>
      <input type="number" class="form-control" name="codanimal" id="validationCustom01"  value="<?php echo $ani->codanimal?>" readonly>
      <div class="valid-feedback">
      ¡Se ve bien!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">nombreanimal</label>
      <input type="text" class="form-control" name="nombreanimal" id="validationCustom02" maxlength="20" pattern="[A-Za-z]{1,20}"  
      value="<?php echo $ani->nombreanimal?>" disabled>
      <div class="valid-feedback">
      ¡Se ve bien!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">id_Habitat</label>
      <input type="text" class="form-control" name="id_Habitat" id="validationCustom02" maxlength="20" 
      value="<?php echo $ani->id_Habitat?>" pattern="[A-Za-z]{1,20}" disabled>
      <div class="invalid-feedback">
      ¡Se ve bien!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">dieta</label>
      <select class="custom-select" id="validationCustom02" name="dieta"  value="<?php echo $ani->dieta?>" disabled>
        <option selected disabled value="">eliga</option>
        <option>carinvoro</option>
        <option>vagatarino</option>
      </select>
      <div class="invalid-feedback">
      ¡Se ve bien!
      </div>
    </div>
    <div class="col-md-2 mb-3">
        <img src="" alt="foto de personnal">
        <label for="validationCustom03"><?php echo $ani->foto  ?> </label>

      </div>
  </div>
  
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>

<?php
}
?>