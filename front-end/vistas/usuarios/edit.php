<?php
if (isset($_REQUEST['id']) && isset($_REQUEST['editar'])) {
  $usuarios->id = $_REQUEST['id'];
  $resultado = $usuarios->obtener_id();
  $usu = $resultado[0];

?>

  <h2>EDIATAR DATOS</h2>
  <form action="../../../back-end/controladores/usuarios_controlador.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
    <input type="hidden" name="opcion" value="2">
    <div class="form-row">


      <div class="col-md-2 mb-3">
        <label for="validationCustom01">id</label>
        <input type="number" class="form-control" name="id" id="validationCustom01" value="<?php echo $usu->id  ?>" readonly>
        <div class="valid-feedback">
        ¡Se ve bien!        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom02">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="validationCustom02" 
        maxlength="20" pattern="[A-Za-z]{1,20}" value="<?php echo $usu->nombre  ?>" required>
        <div class="valid-feedback">
        ¡Se ve bien!        </div>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Email</label>
      <input type="email" class="form-control" id="validationCustom02" name="email"
       maxlength="20" value="<?php echo $usu->email  ?>" required>
      <div class="invalid-feedback">
      ¡Se ve bien!      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom04">Tipo</label>
      <select class="custom-select" id="validationCustom02" name="tipo" value="<?php echo $usu->tipo  ?>"required>
        <option selected disabled value="">Eliga</option>
        <option>Admin</option>
        <option>Super</option>
        <option>Perso</option>
        <option>Clie</option>

      </select>
      <div class="invalid-feedback">
      Seleccione uno valido       </div>
    </div>

    <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">Passw</label>
      <input type="password" class="form-control" id="validationCustom02"  name="passw" 
      value="<?php echo $usu->passw ?>" required>
      <div class="invalid-feedback">
      ¡Se ve bien!              </div>
    </div>
    </div>


      <div class="col-md-2 mb-3">
        <label for="validationCustom04">Estatus</label>
        <select class="custom-select" id="validationCustom02" name="estatus" value="<?php echo $usu->estatus  ?>" required>
          <option selected disabled value="">Eliga</option>
          <option>Activo</option>
          <option>Inactivo</option>

        </select>
        <div class="invalid-feedback">
        ¡Se ve bien!                </div>
      </div>

      <div class="col-md-2 mb-3">
        <input type="hidden" name="foto_actual" value="<?php echo $usu->foto  ?>" >
        <img src="../../back-end/images/personal/<?php echo $usu->foto  ?>" alt="foto de personnal" width="150" height="150">
        <label for="validationCustom03"><?php echo $usu->foto  ?> </label>
        <input type="file" name="foto" accept="image/*" class="form-control" id="validationCustom02">
        <div class="valid-feedback">
        ¡Se ve bien!         </div>
      </div>
    </div>



    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>

<?php
}
?>