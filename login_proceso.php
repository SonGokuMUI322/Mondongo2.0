<?php
$email =$_POST["email"];
$pass =$_POST["pass"];


if ($email=="pepe@mail.com" && $pass == "12345678"){

$_SESSION['auth'] = true;
    // Si entra bien, va al panel
    header("Location: perfil.php");
    exit();

}else{

echo "login incorrecto";
};



?>