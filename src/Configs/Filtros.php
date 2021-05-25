<?php

namespace RemoverPalavroes\Configs;

class Filtros
{
    private $ofensas;
    private $customizadas;
    private $animais;
    private $drogas;
    private $fisiologia;
    private $genero;
    private $moderadas;
    private $raciais;
    private $substituindoAcentos;
    private $substituindoSimbolos;


    public function __construct()
    {
        $this->ofensas = true;
        $this->customizadas = true;
        $this->animais = true;
        $this->drogas = true;
        $this->fisiologia = true;
        $this->genero = true;
        $this->moderadas = true;
        $this->raciais = true;
        $this->substituindoAcentos = true;
        $this->substituindoSimbolos = true;
    }
    /**
     * Get the value of ofensas
     */ 
    public function getOfensas()
    {
        return $this->ofensas;
    }

    /**
     * Set the value of ofensas
     *
     * @return  self
     */ 
    public function setOfensas($ofensas)
    {
        $this->ofensas = $ofensas;

        return $this;
    }

    /**
     * Get the value of customizadas
     */ 
    public function getCustomizadas()
    {
        return $this->customizadas;
    }

    /**
     * Set the value of customizadas
     *
     * @return  self
     */ 
    public function setCustomizadas($customizadas)
    {
        $this->customizadas = $customizadas;

        return $this;
    }

    /**
     * Get the value of animais
     */ 
    public function getAnimais()
    {
        return $this->animais;
    }

    /**
     * Set the value of animais
     *
     * @return  self
     */ 
    public function setAnimais($animais)
    {
        $this->animais = $animais;

        return $this;
    }

    /**
     * Get the value of drogas
     */ 
    public function getDrogas()
    {
        return $this->drogas;
    }

    /**
     * Set the value of drogas
     *
     * @return  self
     */ 
    public function setDrogas($drogas)
    {
        $this->drogas = $drogas;

        return $this;
    }

    /**
     * Get the value of fisiologia
     */ 
    public function getFisiologia()
    {
        return $this->fisiologia;
    }

    /**
     * Set the value of fisiologia
     *
     * @return  self
     */ 
    public function setFisiologia($fisiologia)
    {
        $this->fisiologia = $fisiologia;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of moderadas
     */ 
    public function getModeradas()
    {
        return $this->moderadas;
    }

    /**
     * Set the value of moderadas
     *
     * @return  self
     */ 
    public function setModeradas($moderadas)
    {
        $this->moderadas = $moderadas;

        return $this;
    }

    /**
     * Get the value of raciais
     */ 
    public function getRaciais()
    {
        return $this->raciais;
    }

    /**
     * Set the value of raciais
     *
     * @return  self
     */ 
    public function setRaciais($raciais)
    {
        $this->raciais = $raciais;

        return $this;
    }

    /**
     * Get the value of substituindoAcentos
     */ 
    public function getSubstituindoAcentos()
    {
        return $this->substituindoAcentos;
    }

    /**
     * Set the value of substituindoAcentos
     *
     * @return  self
     */ 
    public function setSubstituindoAcentos($substituindoAcentos)
    {
        $this->substituindoAcentos = $substituindoAcentos;

        return $this;
    }

    /**
     * Get the value of substituindoSimbolos
     */ 
    public function getSubstituindoSimbolos()
    {
        return $this->substituindoSimbolos;
    }

    /**
     * Set the value of substituindoSimbolos
     *
     * @return  self
     */ 
    public function setSubstituindoSimbolos($substituindoSimbolos)
    {
        $this->substituindoSimbolos = $substituindoSimbolos;

        return $this;
    }
}
