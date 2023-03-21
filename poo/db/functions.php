<?php

if(isset($_POST['submit'])) {


    include_once('classPoo.php');
    $user = $_POST['usr'];
    $pass = $_POST['pss'];
    $loguin = new loguin();
    $loguin->entrarDatos($user,$pass);
    $loguin->loguear();
    $response = $loguin->loguear();

    if ($response === "true") {
        header("location: ../home.php");
    }

    else {
        echo '<script language="javascript">alert("Error en datos");</script>';
    }
}