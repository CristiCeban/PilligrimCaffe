<?php


class Product
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

//    PRODUCTS
    public function getAllProducts(){
        $this->db->query('select * from produs;');
        return $this->db->resultSet();
    }

    public function getProduct($id){
        $this->db->query('select * from produs where idProdus=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function deleteProduct($id){
        $this->db->query('delete from produs where idProdus:=id');
    }

    public function updateProduct($id,$price) {
        $this->db->query('update produs set pret=:price where idProdus=:id');
        $this->db->bind('id',$id);
        $this->db->bind('price',$price);
        $this->db->execute();
    }


//    USERS

    public function addUser($login,$mdp,$role){
        $this->db->query('insert into users(login, password,role) value(:username, :password, :role)');
        $this->db->bind('username',$login);
        $this->db->bind('password',$mdp);
        $this->db->bind('role',$role);
        $this->db->execute();
    }
    public function updateUser($login,$mdp,$role,$uid){
        $this->db->query('update users set login=:login, password=:mdp, role=:role where idUtilizator =:uid ;');
        $this->db->bind('login',$login);
        $this->db->bind('mdp',$mdp);
        $this->db->bind('role',$role);
        $this->db->bind('uid',$uid);
        $this->db->execute();
    }
    public function getAllUsers(){
        $this->db->query('select * from users');
        return $this->db->resultSet();
    }
    public function getUser($uid){
        $this->db->query('select * from users where idUtilizator=:uid');
        $this->db->bind('uid',$uid);
        return $this->db->single();
    }
    public function deleteUser($uid){
        $this->db->query('delete from users where uid=:uid');
        $this->db->bind('uid',$uid);
        $this->db->execute();
    }

}