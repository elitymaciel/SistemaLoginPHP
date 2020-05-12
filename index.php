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

if (!empty($_SESSION['logado'])) {
    $router->group("login");
    $router->get("/", "Login:login");
}

$router->group("/");
$router->get("/", "Dashboard:home");

$router->group("usuario");
$router->get("/", "User:cadUsuario");
$router->post("/", "User:cadUsuario");
$router->get("/{grupo}", "User:cadGrupo");
$router->post("/{grupo}", "User:cadGrupo");

/**
*  Controller
*  Login altenticação
*/
$router->group("login");
$router->get("/", "Login:login");
$router->post("/", "Login:login");

$router->get("/{login}", "Login:login");
$router->post("/{auth}", "Login:auth");
$router->get("/reset", "Login:reset");
$router->post("/reset", "Login:reset");

$router->get("/new_password", "Login:novaSenha");
$router->post("/new_password", "Login:novaSenha");
$router->get("/new_password/{id}", "Login:novaSenha");
$router->post("/new_password/{id}", "Login:novaSenha");


$router->group("sair");
$router->get("/", "Login:logout");
/*
* Errors
*/
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