<?php 



function connectSQL(){
    $DBlog="root";
    $DBpass="";
    $DBhost="localhost:3308";
    try{
        $pdo = new PDO("mysql:host='$DBhost'", $DBlog, $DBpass);
    }
    catch(PDOException $pdoe){
        echo "*";
        $pdoe->getMessage();
        echo("Cannot access to the database !!!");
    }
    $sql_query_create_db="CREATE DATABASE IF NOT EXISTS test_uballers";
    $statement=$pdo->query($sql_query_create_db);
    if( $statement === FALSE ){
        echo("Bad request ($sql_query_create_db) !!!");
        exit();
    }
    try{
        $pdo = new PDO("mysql:host=localhost:3308;dbname=test_uballers", $DBlog, $DBpass);
    }
    catch(PDOException $pdoe){
        echo "*";
        $pdoe->getMessage();
        echo("Cannot access to the database !!!");
    }
    return $pdo;
}

function creationTable(){
    $pdo = connectSQL();
    $sql_query_create_table="CREATE TABLE IF NOT EXISTS `users` (
        `login` VARCHAR(100) PRIMARY KEY NOT NULL,
        `name` VARCHAR(100) NOT NULL,
        `first_name` VARCHAR(100) NOT NULL,
        `password` VARCHAR(100) NOT NULL,
        `birthday` DATE NOT NULL,
        `sex` VARCHAR(100) NOT NULL
        )";
    $statement=$pdo->query($sql_query_create_table);
    if( $statement === FALSE ){
        echo("Bad request ($sql_query_create_table) !!!");
        exit();
    }

}

function verifLogin($login,$pwd){
    $pdo = connectSQL();
    creationTable();
    $connected=FALSE;
    $sql_query_verif_login="SELECT COUNT(*) as nb FROM `users` WHERE `login`='$login' AND `password`='$pwd'";
    $statement=$pdo->query($sql_query_verif_login);
    if( $statement === FALSE ){
        echo("Bad request ($sql_query_verif_login) !!!");
        exit();
    }
    $row = $statement->fetch();
    if ($row['nb'] == 0){
        $connected=FALSE;
    }
    else{
        $connected=TRUE;
    }
    return $connected;
}

function insertUser($log,$name,$fname,$pwd,$bday,$sex){
    $pdo=connectSQL();
    creationTable();
    $sql_query_insert_user="INSERT INTO `users` VALUES ('$log','$name','$fname','$pwd','$bday','$sex')";
    $statement=$pdo->query($sql_query_insert_user);
    if( $statement === FALSE ){
        echo("Bad request ($sql_query_insert_user) !!!");
        exit();
    }
}

function updatePwd($log,$pwd){
    $pdo=connectSQL();
    creationTable();
    if (isUserDefined($log)){
        $sql_query_update_pwd="UPDATE `users` SET `password`='$pwd' WHERE `login`='$log'";
        $statement=$pdo->query($sql_query_update_pwd);
        if( $statement === FALSE ){
            echo("Bad request ($sql_query_update_pwd) !!!");
            exit();
        }
    }
}

function isUserDefined($log){
    $pdo=connectSQL();
    creationTable();
    $defined=FALSE;
    $sql_query_check_login="SELECT COUNT(*) as nb FROM `users` WHERE `login`='$log'";
    $statement=$pdo->query($sql_query_check_login);
    if( $statement === FALSE ){
        echo("Bad request ($sql_query_check_login) !!!");
        exit();
    }
    $row = $statement->fetch();
    if ($row['nb'] == 0){
        $defined=FALSE;
    }
    else{
        $defined=TRUE;
    }
    return $defined;
}






?>