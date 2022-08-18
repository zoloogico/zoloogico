<?php

if (isset($_REQUEST['borrar']) && isset($_REQUEST['editar']) && isset($_REQUEST['crear']))





?>

<h2>REGISTRO DE DATOS </h2>
<form action="../../../back-end/controladores/usuarios_controlador.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
  <input type="hidden" name="opcion" value="1">
  <div class="form-row">

    <div class="col-md-2 mb-3">
      <label for="validationCustom01">id</label>
      <input type="number" class="form-control" name="id" id="validationCustom01" readonly>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom02" maxlength="20" pattern="[A-Za-z]{1,20}" required>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Email</label>
      <input type="email" class="form-control" id="validationCustom02" name="email" maxlength="20" required>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>

    <div class="col-md-2 mb-3">
      <label for="validationCustom04">Tipo</label>
      <select class="custom-select" id="validationCustom02" name="tipo" required>
        <option selected disabled value="">Eliga</option>
        <option>Admin</option>
        <option>Super</option>
        <option>Perso</option>
        <option>Clie</option>

      </select>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>
    </div>

    

    <div class="form-row">
    <div class="col-md-4 mb-5">
      <label for="validationCustom03">Passw</label>
      <input type="password" class="form-control" id="validationCustom02" name="passw" maxlength="20" required>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>



    <div class="col-md-2 mb-3">
      <label for="validationCustom04">Estatus</label>
      <select class="custom-select" id="validationCustom02" name="estatus" required>
        <option selected disabled value="">Eliga</option>
        <option>Activo</option>
      </select>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom03">Foto</label>
      <input type="file" name="foto" accept="image/*" class="form-control" id="validationCustom02" required>
      <div class="valid-feedback">
      ¡Se ve bien!      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Acepto los términos y condiciones      </label>
      <div class="invalid-feedback">

      Debe estar de acuerdo antes de enviar.      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>

<?php



?>