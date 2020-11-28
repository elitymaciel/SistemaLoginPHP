<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de escolas de informatica, e financeiro
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */
namespace App\Controllers;

use League\Plates\Engine;
use CoffeeCode\Router\Router;

abstract class Controller
{
    public $view;
    public $templateError;

    public function __construct()
    {
        if (empty($_SESSION['logado'])) {
            $router = new Router(SITE["base_url"]);
            $router->redirect("login");
        }
        $this->view = Engine::create(__DIR__ . "/../../public/admin/", "php");
        $this->templateError = Engine::create(__DIR__ ."/../../public/error/", "php");
    }
}