<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de login
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */


namespace App\Models;


use CoffeeCode\DataLayer\DataLayer;

class Group extends DataLayer
{
    public function __construct()
    {
        parent::__construct("grupo", ["nome"], "id", false);
    }
}