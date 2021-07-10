<?php
$ip_server = "172.28.0.2:3306";
$port_server = "3306";
$db_name = "administracion";
$db_user = "admin_user";
$db_pass = "login_163";

try {
    $conn = new PDO("mysql:host=$ip_server;dbname=$db_name;",$db_user,$db_pass);
} catch (PDOException $error) {
    die('Conected fieled: '.$error->getMessage());
}
?>