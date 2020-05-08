<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de login
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */

namespace App\Controllers;

use CoffeeCode\Router\Router;

class User extends Controller
{
    public function cadUsuario(array $data)
    {
        $router = new Router(SITE["base_url"]);
        $grupo = (new \App\Models\Group())->find()->fetch(true);
        
        if ($grupo) {
            if (isset($data["salvarUsuario"])) {
                $consultarEmail = (new \App\Models\User())->find("email = :e", "e={$data['email']}")->fetch(true);
                if (!$consultarEmail) {
                    $usuario = new \App\Models\User();
                    $usuario->username = $data['nome'];
                    $usuario->last_name = $data['sobrenome'];
                    $usuario->email =  $data['email'];
                    $usuario->password = password_hash($data['password'], PASSWORD_BCRYPT);
                    //$usuario->avatar = $data[''];
                    $usuario->grupo = $data['grupo']; 
                    $usuario->created_at = date("Y-m-d h:m:s");
                    $usuario->updated_at =  date("Y-m-d h:m:s");
                    if($usuario->save()){
                        $_SESSION['alert'] = '<script>window.onload = function(){toastr.success("Usuario salvo.")}</script>';
                        $router->redirect("usuario");
                    }else{
                        $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Não foi possivel salvar.")}</script>';
                        $router->redirect("usuario");
                    }
                }else{
                    $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("O E-mail já foi cadastrado")}</script>';
                    $router->redirect("usuario");
                }
            }
            echo $this->view->render("usuario",[
                "grupo" => $grupo
            ]);
        }else{
            $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Por favor! Adicione um Grupo.")}</script>';
            $router->redirect("usuario/grupo");
        }
    }

    public function cadGrupo(array $data)
    {
        $router = new Router(SITE["base_url"]);
        if (isset($data["salvarGrupo"])) {
            $grupo = new \App\Models\Group();
            $grupo->nome = $data['nome'];
            if ($grupo->save()) {
                $_SESSION['alert'] = '<script>window.onload = function(){toastr.success("Dados salvo com sucesso!")}</script>';
                $router->redirect("usuario/grupo");
            }else{
                $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Error não foi possivel salvar!")}</script>';
                $router->redirect("usuario/grupo");
            }
        }
        echo $this->view->render("grupo");

        
    }
}