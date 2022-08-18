
<?php
include_once "../../../back-end/modelos/animal.php";

$animales = new animales;
$resultado = $animales->obtener_too();
//print_r($resultado);
?>

<?php
include_once "../dashboard/head.php"

    ?>

<?php
include_once "../dashboard/navabar.php"

    ?>

<?php
include_once "../dashboard/main.php"

    ?>



<?php
include_once "../dashboard/scrip.php"

    ?>

    

<?php
include "create_animal.php";
include "data_animales.php";
include "edit_animales.php";
include "show_animales.php";

    ?>