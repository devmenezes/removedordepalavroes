<?php

namespace RemoverPalavroes\Utils;

use RemoverPalavroes\Utils\TextUtil;
use RemoverPalavroes\Configs\Filtros;
use RemoverPalavroes\Wordlists\Drogas;
use RemoverPalavroes\Wordlists\Genero;
use RemoverPalavroes\Wordlists\Animais;
use RemoverPalavroes\Wordlists\Ofensas;
use RemoverPalavroes\Wordlists\Raciais;
use RemoverPalavroes\Wordlists\Moderadas;
use RemoverPalavroes\Wordlists\Fisiologia;
use RemoverPalavroes\Wordlists\Customizadas;

class Juiz
{
    private $palavrasSujas;
    private bool $substituirAcentos = true;
    private bool $substituirSimbolos = true;

    public function __construct(Filtros $filtros)
    {
        $this->palavrasSujas = [];
        if ($filtros->getOfensas()) $this->incluir(Ofensas::$palavras);
        if ($filtros->getCustomizadas()) $this->incluir(Customizadas::$palavras);
        if ($filtros->getAnimais()) $this->incluir(Animais::$palavras);
        if ($filtros->getDrogas()) $this->incluir(Drogas::$palavras);
        if ($filtros->getFisiologia()) $this->incluir(Fisiologia::$palavras);
        if ($filtros->getGenero()) $this->incluir(Genero::$palavras);
        if ($filtros->getModeradas()) $this->incluir(Moderadas::$palavras);
        if ($filtros->getRaciais()) $this->incluir(Raciais::$palavras);

        $this->substituirAcentos = $filtros->getSubstituindoAcentos();
        $this->substituirSimbolos = $filtros->getSubstituindoSimbolos();
    }

    public function isPalavraSuja($palavra): bool
    {

        return in_array(strtolower($palavra), $this->palavrasSujas);
    }

    private function incluir($palavras)
    {
        $palavras = array_map('strtolower', $palavras);
        if ($this->substituirAcentos) $palavras = array_map([TextUtil::class, "removeAcentos"], $palavras);
        if ($this->substituirSimbolos) $palavras = array_map([TextUtil::class, "substituiSimbolos"], $palavras);
        $palavras = array_map([TextUtil::class, "removeSimbolos"], $palavras);
        $this->palavrasSujas = array_merge($this->palavrasSujas, $palavras);
    }
}
