<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalculadorMedia 
{
    public function calcular($notas = null) 
    {
        if (empty($notas) || count($notas) == 0) {
            return 0;
        }

        $soma = 0;
        
        foreach($notas as $nota) {
            if(isset($nota)) {
              $soma += $nota->nota;
            }
        }

        return $soma / count($notas);
    }
}
