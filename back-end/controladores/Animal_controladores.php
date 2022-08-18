<?php
require_once "../modelos/animal.php";


print_r($_POST);
echo "BR";
print_r($_FILES);


if (isset($_REQUEST['opcion'])) {
    $opcion = $_REQUEST['opcion'];
    include_once "file_upload2.php";

    switch ($opcion) {
        case 1: //crear


            if (
                isset($_REQUEST['codanimal']) && isset($_REQUEST['nombreanimal']) && isset($_REQUEST['id_Habitat'])
                && isset($_REQUEST['dieta']) && isset($_FILES['foto'])
            ) {

                $animales = new animales ();
                $animales->codanimal = $_REQUEST['codanimal'];
                $animales->nombreanimal = $_REQUEST['nombreanimal'];
                $animales->id_Habitat = $_REQUEST['id_Habitat'];
                $animales->dieta = $_REQUEST['dieta'];
                $animales->foto = $_FILES['foto']['name'];

                $resultado = $animales->crear();
                $mensaje = "";


               
                if ($resultado == 1) {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["foto"]["name"])) . " has been uploaded.";
                    } else {
        echo "Sorry, there was an error uploading your file.";
                           }
}
                    echo $mensaje = "Inserccion exitosa";
                    header('Location: ../../front-end/vistas/animales/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    //despues de insertar
                    echo  $mensaje = "no fue posible ";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }
            break;
        case 2: //actualizar
            if (
                isset($_REQUEST['codanimal']) && isset($_REQUEST['nombreanimal']) && isset($_REQUEST['id_Habitat'])
                && isset($_REQUEST['dieta']) || isset($_FILES['foto'])
            ) {


                $animales = new animales ();
                $animales->codanimal = $_REQUEST['codanimal'];
                $animales->nombreanimal = $_REQUEST['nombreanimal'];
                $animales->id_Habitat = $_REQUEST['id_Habitat'];
                $animales->dieta = $_REQUEST['dieta'];
                if($_FILES['foto']['error']==0){
                    $animales->foto=$_FILES['foto']['name'];
                }else{
                    $animales->foto=$_FILES['foto_actual'];
                }
                $animales->foto = $_FILES['foto']['name'];

                $resultado = $animales->actulizar();
                $mensaje = "";



                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if(unlink("../images/personal".$_REQUEST['foto_actual'])){
                        echo "la foto ha sido removida";
                    }
                    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["foto"]["name"])) . " has been uploaded.";
                    } else {
                         
                        echo $mensaje="Sorry, there was an error uploading your file.";
                    }
                }


                if ($resultado == 1) {
                    echo $mensaje = "Actualizacion  exitosa";
                    header('Location: ../../front-end/vistas/animales/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    //despues de insertar
                    echo  $mensaje = "no fue posible actualizar  ";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

    
            break;
        case 3: ///borrar

            if (
                isset($_REQUEST['codanimal'])
            ) {

                $animales = new animales ();
                $animales->codanimal = $_REQUEST['codanimal'];


                $resultado = $animales->borrar();
                $mensaje = "";

                if ($resultado == 1) {
                    echo $mensaje = "Borrado exitosa";
                    header('Location: ../../front-end/vistas/animales/index.php?mensaje=' . $mensaje);
                    exit();
                } else if ($resultado == 0) {
                    //despues de insertar
                    echo  $mensaje = "no fue posible borrar  ";
                }
            } else {
                echo $mensaje = "faltan datos por enviar";
            }

            break;
    }
} else {
    echo "falta la variable opcion";
}
