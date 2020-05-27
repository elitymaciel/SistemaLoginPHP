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
use App\Features\Email;


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
        $login = (new User())->find("email = :e", "e={$data['email']}")->fetch();
        //$funcionario = (new Funcionario())->find("id = :i", "i={$login->funcionario}")->fetch();
        //$grupo = (new Group())->find("id = :i", "i={$funcionario->id_grupo}")->fetch();
        
       
        if(!$login || !password_verify($pass, $login->password)){
            if (empty($_SESSION['logado'])) {
                $_SESSION['alert'] = '<script>
            window.onload = function(){
                toastr.error("Seu Email ou Senha estao incorretos.")
            }
        </script>';
                
                $router->redirect("login");
            }
        }else{

            if ($login->reset_password == 1 ) {
                $router->redirect("login/new_password/$login->id");
            }
            //$_SESSION['cnpj'] = $funcionario->cnpj;
            $_SESSION['nome'] = $login->username;
            $_SESSION['lastname'] = $login->last_name;
            $_SESSION['email'] = $login->email;
            $_SESSION['permissao'] = $login->grupo;
            $_SESSION['avatar'] = $login->avatar;
            $_SESSION['logado'] = 1;
            $_SESSION['alert'] = '<script>
            window.onload = function(){
                toastr.success("Login efetuado com sucesso!")
            }
        </script>';
            $router->redirect("/");
        }
         
     }
     public function reset(array $data):void
     {
         $router = new Router(SITE['base_url']);
         $geraSenha = new \App\Features\Senha();
         $email = new Email();
         if (!empty($data['email'])) { /** Verifica se o array no campo email esta vazio */
            $verifica_email = (new User())->find("email = :e", "e={$data['email']}")->fetch();
            if(!$verifica_email){
                $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Email não exite ou incorreto.")}</script>';
                $router->redirect("/login");
            }else{
                $password = $geraSenha->geraSenha(8, false, true, false);
                $updateUsuario = (new User())->findById($verifica_email->id);
                $updateUsuario->password = password_hash($password, PASSWORD_BCRYPT);
                $updateUsuario->reset_password = 1; /** Marcapara o usuario alterar a senha no proximo login */
                if($updateUsuario->save()){
                    $email->add(
                        "Reset de Senha",
                        "<h1>Sua Nova senha</h1><b>".$password."</b>",
                        "maciel Oliveira",
                        $verifica_email->email
                    )->send();
                    if(!$email->error()) {
                        $_SESSION['alert'] = '<script>
                        window.onload = function(){
                            toastr.success("Senha resetada!")
                                }
                            </script>';
                        $router->redirect("/");
                    }else{
                        echo $email->error()->getMessage();
                    }
                }
            }
         } 
        echo $this->view->render("reset");
     }

     public function novaSenha($data):void
     {
        $id = $data['id'];
        unset($data['id']);
        $update_senha = (new User())->findById($id);
        $router = new Router(SITE["base_url"]);
         if (isset($data['password'])) {
            if ($data['password'] == $data['password2']) {
                $update_senha->password = password_hash($data['password'], PASSWORD_BCRYPT);
                $update_senha->reset_password = 0; //Marca para o usuario altera '1 sim', '0 não'
                    if ($update_senha->save()) {
                        $_SESSION['alert'] = '<script>
                                window.onload = function(){
                                    toastr.success("Senha cadastrada com sucesso")
                                }
                            </script>';
                        $router->redirect("/");
                    }
            }else{
                $_SESSION['alert'] = '<script>
                             window.onload = function(){
                                 toastr.error("Error as senha digitadas não são iguais!")
                             }
                         </script>';
                $router->redirect("/login/novasenha/$id");
            }

        }else{
            echo $this->view->render("novasenha");
        }
     }

     public function logout(array $data): void
     {
        session_destroy();
        $router = new Router(SITE["base_url"]);
        $router->redirect("login");
     }
}