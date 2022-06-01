<?php

include("function.php");

if (!isset($_POST['login']) || !isset($_POST['password'])){
    header("Location: ./index.php");
    exit();
}

$log=$_POST['login'];
$pwd=$_POST['password'];

if ($log=="" || $pwd==""){
    header("Location: ./index.php");
    exit();
}

$connected=FALSE;
$connected=verifLogin($log,$pwd);

if ($connected){
    echo "connexion réussie";
} else {
    echo "connexion échouée";
}

?>

<a href="index.html"><button>Retour</button></a>