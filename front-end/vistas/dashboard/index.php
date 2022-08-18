
<?php
//print_r($_SESSION);
session_start();
//print_r($_SESSION);
if(!isset($_SESSION['tipo'])){
    $mensaje="Es necesacio iniciar sesion";
    header('Location:../sign-in/index.php?mensaje=' . $mensaje);
    exit();

}
?>




<?php
include_once "head.php"

?>

<?php
include_once "navabar.php"

?>

<?php
include_once "main.php"

?>



<?php
include_once "scrip.php"

?>






<?php


/*include "create.php";

include "data.php";

include "edit.php";

include "show.php";*/

?>










</div>


</div>
</main>
</div>
</div>





</body>

</html>