<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    public function calcular(){

        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $valorGasolina = 5.70;

        $consumoGasolina = ($distancia / $autonomia ) * $valorGasolina;

        return $consumoGasolina;

    }
}
