<?php

include "function.php";

if (isset($_POST['name']) && isset($_POST['firstName']) && isset($_POST['login']) && isset($_POST['verifLogin']) && isset($_POST['password']) && isset($_POST['birthday']) && isset($_POST['sex'])){
    $name=$_POST['name'];
    $fname=$_POST['firstName'];
    $log=$_POST['login'];
    $verif=$_POST['verifLogin'];
    $pwd=$_POST['password'];
    $bday=$_POST['birthday'];
    $sex=$_POST['sex'];
} else {
    header("Location: ./index.php");
    exit();
}

if($log!=$verif){
    header("Location: ./index.php");
    exit();
}

insertUser($log,$name,$fname,$pwd,$bday,$sex);

echo 'inscription réussie';

?>

<a href="index.html"><button>Retour</button></a>