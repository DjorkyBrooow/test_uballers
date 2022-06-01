<?php 

include "function.php";

if (isset($_POST['login']) && isset($_POST['verifNewPwd']) && isset($_POST['newPwd'])){
    $log=$_POST['login'];
    $verif=$_POST['verifNewPwd'];
    $pwd=$_POST['newPwd'];
} else {
    header("Location: ./infoForget.php");
    exit();
}

if($pwd!=$verif){
    header("Location: ./infoForget.php");
    exit();
}

if(!isUserDefined($log)){
    header("Location: ./infoForget.php");
    exit();
}

updatePwd($log,$pwd);

echo "mise à jour réussie";

?>

<a href="index.html"><button>Retour</button></a>
