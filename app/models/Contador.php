<?php
namespace app\models;
use app\core\Model;

class Contador{
    public function assinar($sala, $nome){
        $resultado = "assinado por {$nome}, {$sala}";
        return $resultado;
    }
    public function lista($sala){
        $lista = "
                01 -Fabio <br>
                02 -Junior <br>
                03 -Pereira <br>
                04 -Lucas <br>
                 ";
        return $lista;
    }
    public function inserir($contador, $sala){
        $lst = $this->lista($sala) . "<br 05>" . $contador;
        return $lst;
    }
}