<?php

use PHPUnit\Framework\TestCase;
use RemoverPalavroes\RemovedorDePalavroes;

class RemocaoDePalavroesTest extends TestCase
{

    private $removedor;

    protected function setUp():void
    {
        $this->removedor = new RemovedorDePalavroes();
    }

    public function testaAnimais()
    {
        $texto = "veado. vaca";
        $ideal = "***** ****";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaCustomizadas()
    {
        $texto = "Testando com TestABC9Uoooi";
        $ideal = "Testando com *************";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaDrogas()
    {
        $texto = "maconha cocaína";
        $ideal = "******* *******";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaFisiologia()
    {
        $texto = "ânus, Gonorreia";
        $ideal = "**** *********";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaGenero()
    {
        $texto = "Homossexual, Transexual";
        $ideal = "*********** **********";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaModeradas()
    {
        $texto = "L@drão Fei0so";
        $ideal = "****** ******";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaOfensas()
    {
        $texto = "vsf pqp vag@bund0 m3rda baba-ovo";
        $ideal = "*** *** ********* ***** *******";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaRaciais()
    {
        $texto = "Nego/ /judeu/zinho";
        $ideal = "**** **********";

        $textoProcessado = $this->removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }
}
