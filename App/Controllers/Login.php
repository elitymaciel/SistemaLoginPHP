<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de escolas de informatica, e financeiro
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */

namespace App\Controllers;

use App\Models\User;
use League\Plates\Engine;
use CoffeeCode\Router\Router;


class Login
{
    /**
     * @Engine
     * @Router
     **/

     private $view;
     
     public function __construct()
     {
         $this->view = Engine::create(__DIR__ . "/../../Views/login", "php");
     }

     public function login(array $data): void
     {
         echo $this->view->render("login");
     }

     public function auth(array $data): void
     {
         $router = new Router(SITE["base_url"]);
         $pass = $data['password'];
         $login = (new User())->find("email = :e", "e={$data['email']}")->fetch(true);
         if ($login || password_verify($pass, $login->password)) {
            unset($login->password);
            if ($login[0]->data()->reset_password == 1) { // redirecionar caso o campo reset for 1
                $router->redirect("login/new_password/$login->id");
            }elseif($login[0]->data()->is_deleted == 1){
                $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Usuario removido")}</script>';
                $router->redirect("login");
            }
            //$_SESSION['cnpj'] = $funcionario->cnpj;
            $_SESSION['nome'] = $login[0]->data()->username;
            $_SESSION['sobrenome'] = $login[0]->data()->last_name;
            $_SESSION['email'] = $login[0]->data()->email;
            $_SESSION['permissao'] = $login[0]->data()->grupo;
            $_SESSION['avatar'] = $login[0]->data()->avatar;
            $_SESSION['logado'] = 1;
            $_SESSION['alert'] = '<script>window.onload = function(){toastr.success("Login efetuado com sucesso!")}</script>';
            $router->redirect("/");
         }else{
            $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Email ou senha incorretos :)")}</script>';
            $router->redirect("login");
         }
         
     }

     public function logout(array $data): void
     {
        session_destroy();
        $router = new Router(SITE["base_url"]);
        $router->redirect("login");
     }
}