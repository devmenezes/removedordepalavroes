<?php

namespace RemoverPalavroes;

use RemoverPalavroes\Utils\Juiz;
use RemoverPalavroes\Utils\Limpador;
use RemoverPalavroes\Utils\TextUtil;
use RemoverPalavroes\Configs\Filtros;

class RemovedorDePalavroes
{

    private $filtros;

    public function __construct()
    {
        $this->filtros = new Filtros();
    }

    public function processa($texto): string
    {
        $textoComparar = $texto;
        $juiz = new Juiz($this->filtros);
        $palavras = explode(" ", $texto);
        $palavrasComparar = explode(" ", $textoComparar);

        foreach ($palavrasComparar as $posicao => $palavra) {

            if ($this->filtros->getSubstituindoAcentos()) $palavra = TextUtil::removeAcentos($palavra);
            if ($this->filtros->getSubstituindoSimbolos()) $palavra = TextUtil::substituiSimbolos($palavra);
            $palavra = TextUtil::removeSimbolos($palavra);

            if ($juiz->isPalavraSuja($palavra)) {
                $palavras[$posicao] = Limpador::limpa($palavra);
            }
        }

        $textoLimpo = implode(" ", $palavras);

        return $textoLimpo;
    }

    public function naoSubstituindoSimbolos()
    {
        $this->filtros->setSubstituindoSimbolos(false);
        return $this;
    }

    public function naoSubstituindoAcentos()
    {
        $this->filtros->setSubstituindoAcentos(false);
        return $this;
    }

    public function permitirAnimais(): self
    {
        $this->filtros->setAnimais(false);
        return $this;
    }

    public function permitirDrogas(): self
    {
        $this->filtros->setDrogas(false);
        return $this;
    }

    public function permitirFisiologia(): self
    {
        $this->filtros->setFisiologia(false);
        return $this;
    }

    public function permitirGeneros(): self
    {
        $this->filtros->setGenero(false);
        return $this;
    }

    public function permitirModeradas(): self
    {
        $this->filtros->setModeradas(false);
        return $this;
    }

    public function permitirRaciais(): self
    {
        $this->filtros->setRaciais(false);
        return $this;
    }
}
