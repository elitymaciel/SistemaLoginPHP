<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de escolas de informatica, e financeiro
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */

namespace App\Controllers;

use App\Controllers\Controller;

class Dashboard extends Controller
{
    public function home($data)
    {   
        echo $this->view->render("home");
    }

    public function error($data)
    {
        echo $this->templateError->render("error", [
            "error" => $data["error"]
        ]);
    }
}