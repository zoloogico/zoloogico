
<?php
include_once "../../../back-end/modelos/ticket.php";

$ticket = new ticket;
$resultado = $ticket->obtener_too();
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
include "create_ticket.php";
include "data_ticket.php";
include "edit_ticket.php";
include "show_ticket.php";

    ?>