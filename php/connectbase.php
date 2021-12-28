<?php
if(!session_id()) session_start();


$dbhost="users.iee.ihu.gr";
$dbname='users.iee.ihu.gr';
$dbuser='it154571';
$dbpass='';

/*
$dbhost="localhost";
$dbname="adisegame";
$dbuser="root";
$dbpass="";
*/
//connection
try{
    $_db=new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(
        PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT=>true
    ));
}catch(Exception $e){
    die("ERROR : ".$e->getMessage());
}

?>