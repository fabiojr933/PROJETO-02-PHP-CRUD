<?php
namespace app\models;
use app\core\Model;

class Cantor extends Model{

    public function lista(){
        $sql = "SELECT * FROM CANTOR";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function pequisar(){
        $sql = "SELECT * FROM CANTOR WHERE CANTOR LIKE 'L%'";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function inserir($nome){
        // FORMA ERRADA
        $sql = "INSERT INTO CANTOR SET CANTOR = '$nome' ";
        $qry = $this->db->query($sql);
        return $this->db->lastInsertId();
    }
    public function inserir2($nome){
        // FORMA CORRETA
        $sql = "INSERT INTO CANTOR SET CANTOR = :nome ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->execute();
        return $this->db->lastInsertId();
    }
    public function alterar($id, $nome){
        $sql = "UPDATE CANTOR SET CANTOR = :NOME WHERE ID_CANTOR = :ID";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":NOME", $nome);
        $qry->bindValue(":ID", $id);
        $qry->execute();
        return $this->db->lastInsertId();
    }
    public function getCantor($id){
        $sql = "SELECT * FROM CANTOR WHERE ID_CANTOR = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_ASSOC);
    }
    public function deletar($id){
        $sql = "DELETE FROM CANTOR WHERE ID_CANTOR = :ID";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":ID", $id);
        $qry->execute();
    }
}