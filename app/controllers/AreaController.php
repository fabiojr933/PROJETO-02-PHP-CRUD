<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Area;

class AreaController extends Controller{
    
   public function index(){
    $dados["figura"] = null;
    $dados["view"] = "formas";
    $this->load("template", $dados);
   } 
   public function calcula(){
    $objArea = new Area();
    $area = null;
    $formula = null;

    $figura = $_POST["figura"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $raio = $_POST["raio"];

    

    if($figura == "quadrado"){
        $area = $objArea->quadrado($base);
        $formula = "base * base";
    }
    else if($figura == "triangulo"){
        $area = $objArea->triangulo($base, $altura);
        $formula = "base * altura / 2";
    }
    else if($figura == "circulo"){
        $area = $objArea->circulo($raio);
        $formula = "PI * raio * raio";
    }
    else if($figura == "retangulo"){
        $area = $objArea->retangulo($base, $altura);
        $formula = "base * altura";
    }
    else{
        $area = 0;
    }
    $dados["formula"] = $formula;
    $dados["figura"] = $figura;
    $dados["area"] = $area;
    $dados["base"] = $base;
    $dados["altura"] = $altura;
    $dados["raio"] = $raio;
    


    $dados["view"] = "formas";
    $this->load("template", $dados);
   }
}
