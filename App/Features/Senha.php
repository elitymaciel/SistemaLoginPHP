<?php
/**
 * Email: elitymaciel@hotmail.com
 * Autor: Maciel Oliveira
 * Descricao: Sistema web, para gerenciamento de login
 * Empresa: Instituto Pcep
 * Site: seosistema.com.br
 */

namespace App\Features;

class Senha
{
    /**
     * @param int $tamanho
     * @param bool $maiusculas
     * @param bool $numeros
     * @param bool $simbolos
     * @return string
     */

    public function geraSenha($tamanho = 8, $maiusculas = true, $numero = true, $simbolos=false)
    {
        $senhaMin  = 'abcdefghijklmnopqrstuvwxyz';
        $senhaMai  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';
        $simb = '!@#$%*-';
        $retorno = '';
        $caracteres = '';
        $caracteres .= $senhaMin;
            if($maiusculas) $caracteres .= $senhaMai;
            if($numero) $caracteres .= $num;
            if($simbolos) $caracteres .=$simb;
            $len = strlen($caracteres);
            for ($n = 1; $n <= $tamanho; $n++){
                $rand = mt_rand(1, $len);
                $retorno .= $caracteres[$rand-1];
            }
        return $retorno;
    }
}