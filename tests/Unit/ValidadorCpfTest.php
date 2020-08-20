<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\ValidadorCpf;

class ValidadorCpfTest extends TestCase
{
    public function testEhValidoDeveRetornarFalsoQuanoOCpfEhNull() : void
    {
        $validador = new ValidadorCpf();
        
        $this->assertFalse($validador->ehValido());
    }

    public function testEhValidoDeveRetornarFalsoQuanoOCpfEhVazio() : void
    {
        $validador = new ValidadorCpf();
        $cpf = "";
        
        $this->assertFalse($validador->ehValido($cpf));
    }

    public function testEhValidoDeveRetornarFalsoQuanoOCpfEhInvalido() : void
    {
        $validador = new ValidadorCpf();
        $cpf = "00000000000";
        
        $this->assertFalse($validador->ehValido($cpf));
    }

    public function testEhValidoDeveRetornarTrueQuanoOCpfEhValido() : void
    {
        $validador = new ValidadorCpf();
        $cpf = "04100115091";
        
        $this->assertTrue($validador->ehValido($cpf));
    }
}
