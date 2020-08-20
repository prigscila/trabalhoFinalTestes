<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\CalculadorMedia;
use App\Nota;

class CalculadorMediaTest extends TestCase
{
    public function testMediaAlunoDeveRetornarMediaDoAluno() : void
    {
        $nota1 = new Nota();
        $nota1->nota = 8;
        
        $nota2 = new Nota();
        $nota2->nota = 10;
        
        $notas = [ $nota1, $nota2 ];

        $calculador = new CalculadorMedia();
        
        $this->assertSame($calculador->calcular($notas), 9);
    }

    public function testMediaAlunoDeveRetornarZeroQuandoAlunoNaoTemNota() : void
    {
        $calculador = new CalculadorMedia();
        
        $this->assertSame($calculador->calcular(), 0);
    }
}
