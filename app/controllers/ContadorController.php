<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Contador; 

class ContadorController extends Controller{
    
   public function index(){
       echo "<br>contador<br>";
   } 
   public function assinatura($sala, $nome){
    //chamar o model
    $objContador = new Contador();
    $dados["assinatura"] = $objContador->assinar($sala, $nome);
    $this->load("index", $dados);
    
    }
    public function Lista($sala){
        $objContador = new Contador();
        $contadores = $objContador->lista($sala);      
        echo $contadores; 
    } 
    public function inserir($contador, $sala){
        $objContador = new Contador();
        $lista = $objContador->inserir($contador, $sala);
        echo "<h1> Lista dos contadores: $sala </h1><hr>" .$lista;
    }
}
