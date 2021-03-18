<?php
namespace app\controllers;

use app\core\Controller;

class ListaController extends Controller{
    
   public function index(){
       $dados["view"] = "cantor/lista";
       $this->load("template", $dados);
   } 
}
