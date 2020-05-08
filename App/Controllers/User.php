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
            echo "contem registro";
        }else{
            $_SESSION['alert'] = '<script>window.onload = function(){toastr.error("Por favor! Adicione um Grupo.")}</script>';
            $router->redirect("usuario/grupo");
        }
    }

    public function cadGrupo(array $data)
    {
        echo $this->view->render("grupo");
    }
}