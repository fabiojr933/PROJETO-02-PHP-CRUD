<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Cantor;

class CantorController extends Controller{

    public function index(){
        $obj = new Cantor();
        $dados["cantores"] = $obj->lista();
        $dados["view"] = "cantor/lista";
        $this->load("template", $dados);
    }
    public function inserir(){
      /*  $obj = new Cantor();
        $nome = $_POST["nome"];
        $obj->inserir2($nome);
        header("location:" .URL_BASE ."cantor"); */
    }
    public function create(){
        $dados["view"] = "cantor/create";
        $this->load("template", $dados);
    }
    public function salvar(){      
        $obj = new Cantor();
        $cantor = $_POST["nome"];
        $id = $_POST["id_cantor"];
        if($id){
            $obj->alterar($id, $cantor);
        }else{
            $obj->inserir($cantor);
        }        
        header("location:" .URL_BASE ."cantor");
    }
    public function edit($id){
        $obj = new Cantor($id);
        $obj = new Cantor();
        $dados["cantor"] = $obj->getCantor($id);        
        $dados["view"] = "cantor/create";
        $this->load("template", $dados);
    }
    public function delete($id){
        $obj = new Cantor();
        $obj->deletar($id);
        header("location:" .URL_BASE ."cantor");    
    }
    public function lista(){
    /*    $obj = new Cantor();
        $retorno = $obj->lista();
        foreach($retorno as $cantor){
            echo $cantor["cantor"] ."<br>";
        }
        */
    }
}