<?php


class Product
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllProducts(){
        $this->db->query('select * from mydb.produs;');
        return $this->db->resultSet();
    }

    public function getProduct($id){
        $this->db->query('select * from mydb.produs where idProdus=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function deleteProduct($id){
        $this->db->query('delete from mydb.produs where idProdus:=id');
    }
}