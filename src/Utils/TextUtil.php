<?php

namespace RemoverPalavroes\Utils;


class TextUtil
{

    static function substituiSimbolos($string)
    {
        return preg_replace(array("/(@|4)/", "/(3)/", "/(!)/", "/(0)/", '/([$])/', "/(7)/"), explode(" ", "a e i o s t"), $string);
    }

    static function removeSimbolos($texto)
    {
        $texto = preg_replace('/[^A-Za-z0-9@!$]/', '', $texto);
        return $texto;
    }

    static function removeAcentos($string)
    {
        return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
    }

}
