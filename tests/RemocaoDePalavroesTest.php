<?php

use PHPUnit\Framework\TestCase;
use RemoverPalavroes\RemovedorDePalavroes;

class RemocaoDePalavroesTest extends TestCase
{

    public function testaAnimais()
    {
        $texto = "Aquela vaca";
        $ideal = "Aquela ****";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaCustomizadas()
    {
        $texto = "Testando com TestABC9Uoooi";
        $ideal = "Testando com *************";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaDrogas()
    {
        $texto = "maconha cocaína";
        $ideal = "******* *******";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaFisiologia()
    {
        $texto = "ânus, Gonorreia";
        $ideal = "**** *********";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaGenero()
    {
        $texto = "Homossexual, Transexual";
        $ideal = "*********** **********";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaModeradas()
    {
        $texto = "L@drão Fei0so";
        $ideal = "****** ******";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaOfensas()
    {
        $texto = "vsf pqp vag@bund0 m3rda baba-ovo";
        $ideal = "*** *** ********* ***** *******";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }

    public function testaRaciais()
    {
        $texto = "Nego/ /judeu/zinho";
        $ideal = "**** **********";

        $removedor = new RemovedorDePalavroes();
        $textoProcessado = $removedor->processa($texto);

        $this->assertEquals($ideal, $textoProcessado);
    }
}
