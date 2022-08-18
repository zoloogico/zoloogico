<?php
if (isset($_REQUEST['id']) && isset($_REQUEST['editar'])) {
  $personal->id = $_REQUEST['id'];
  $resultado = $personal->obtener_id();
  $perso = $resultado[0];

?>

  <h2>EDIATAR DATOS</h2>
  <form action="../../../back-end/controladores/personal_comtrolador.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <input type="hidden" name="opcion" value="2">
    <div class="form-row">


      <div class="col-md-2 mb-3">
        <label for="validationCustom01">id</label>
        <input type="number" class="form-control" name="id" id="validationCustom01" value="<?php echo $perso->id  ?>" readonly>
        <div class="valid-feedback">
        ¡Se ve bien!        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" id="validationCustom02" maxlength="20" pattern="[A-Za-z]{1,20}" value="<?php echo $perso->apellidos  ?>" required>
        <div class="valid-feedback">
        ¡Se ve bien!        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom03">Nombres</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombres" maxlength="20" value="<?php echo $perso->nombres  ?>" required>
        <div class="invalid-feedback">
        ¡Se ve bien!        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Genero</label>
        <select class="custom-select" id="validationCustom02" name="genero" value="<?php echo $perso->genero  ?>" required>
          <option selected disabled value="">Eliga</option>
          <option>HOMBRE</option>
          <option>MUGER</option>
        </select>
        <div class="invalid-feedback">
        ¡Se ve bien!        </div>
      </div>

      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Estatus</label>
        <select class="custom-select" id="validationCustom02" name="estatus" value="<?php echo $perso->estatus  ?>" required>
          <option selected disabled value="">Eliga</option>
          <option>Activo</option>
          <option>Inactivo</option>
        </select>
        <div class="invalid-feedback">
        ¡Se ve bien!        </div>
      </div>

      <div class="col-md-2 mb-3">
        <input type="hidden" name="foto_actual" value="<?php echo $perso->foto  ?>" >
        <img src="../../back-end/images/personal/<?php echo $perso->foto  ?>" alt="foto de personnal" width="150" height="150">
        <label for="validationCustom03"><?php echo $perso->foto  ?> </label>
        <input type="file" name="foto" accept="image/*" class="form-control" id="validationCustom02">
        <div class="valid-feedback">
        ¡Se ve bien!        </div>
      </div>
    </div>



    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>

<?php
}
?>