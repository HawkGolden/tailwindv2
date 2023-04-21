<?php
include("php/con_db.php");

if (isset ($_POST['enviar'])) {
    if (strlen($_POST['email'])  >= 1 && strlen($_POST['mensaje']) >= 1) {
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
        $mens = "INSERT INTO datos(email,mensaje) VALUES ('$email','$mensaje')";
        $resultado = mysqli_query($conex,$mens);
        
        if ($resultado){

                ?>
                <h3>Mensaje enviado.</h3>
                <?php

        } else {
            ?>
            <h3> Ha ocurrido un error.</h3>
            <?php
        
        } 
    }   else {
        ?>
        <h3> Complete todos los campos.</h3>
        <?php
    }    
}

?>