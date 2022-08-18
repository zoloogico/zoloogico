
<?php
include_once "../../../back-end/modelos/ventas.php";

$ventas = new ventas;
$resultado = $ventas->obtener_too();
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
include "data_animales.php";

    ?>