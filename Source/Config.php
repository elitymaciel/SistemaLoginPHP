<?php
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

ini_set("display_errors", 1);

$config['url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$config['url'] .= "://".$_SERVER['HTTP_HOST'];
$config['url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

define("SITE", [
    "titulo" => "Instituto PCEP",
    "base_url" => $config['url'],
    "locale" => "pt_BR",
    "development" => "Maciel Oliveira"
]);
define("EMAIL", [
    "host" => "smtp.office365.com",
    "post" => "587",
    "user" => "seuemail@hotmail.com",
    "passwd" => "",
    "from_name" => "Maciel Oliveira",
    "from_email" => "destinatario@hotmail.com"
]); 


define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "login",
    "username" => "admin",
    "passwd" => "oliveira",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
