<?php
namespace app\controllers;

class GeralController{
    
   public function index(){
       echo "<br>Controller geral criado do zero<br>";
   }        
  public function falar($pessoa){
    echo "quero falar {$pessoa}"; 
  }
  public function entregar(){
      echo "entregar";
  }
}
