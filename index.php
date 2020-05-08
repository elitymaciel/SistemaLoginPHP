<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de login
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */
ob_start();
session_start();


require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;


$router = new Router(SITE["base_url"]);
$router->namespace("App\Controllers");

$router->group("/");
$router->get("/", "Dashboard:home");

$router->group("usuario");
$router->get("/", "User:cadUsuario");
$router->get("/{grupo}", "User:cadGrupo");

$router->group("oops");
$router->get("/{error}", function($data){
    print_r($data['error']);
});


$router->dispatch();
if ($router->error()) {
    if ($router->error()) {
        $router->redirect("/oops/{$router->error()}");
    }
    
}