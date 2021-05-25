<?php

namespace RemoverPalavroes\Utils;

class Limpador
{

    static function limpa($palavra)
    {
        $retorno = "";
        $limite = strlen($palavra);
        for ($i = 0; $i < $limite; $i++) $retorno .= "*";

        return $retorno;
    }
}
