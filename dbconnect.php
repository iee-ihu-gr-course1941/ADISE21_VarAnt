<?php
$user='root';
$pass='000000';
$host='users.iee.ihu.gr';
$db = 'nmm.sql';


$mysqli = new mysqli($host, $user, $pass, $db,null,'/home/student/it/2015/it154571/mysql/run/mysql.sock');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . 
    $mysqli->connect_errno . ") " . $mysqli->connect_error;
}?>
