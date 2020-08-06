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

    public function addProduct($nume,$pret,$imagePath,$categorie){
        $this->db->query('insert into produs(NumeProdus, Pret,ImagePath,categorie) value(:nume, :pret, :imagePath,:categorie)');
        $this->db->bind('nume',$nume);
        $this->db->bind('pret',$pret);
        $this->db->bind('imagePath',$imagePath);
        $this->db->bind('categorie',$categorie);
        $this->db->execute();
    }

    public function deleteProduct($id){
        $this->db->query('delete from produs where idProdus=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    }

    public function updateProduct($id,$nume,$price,$imagePath,$category) {
        $this->db->query('update users set login=:login, mdp=:mdp, role=:role where uid =:uid;');
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
        $this->db->query('delete from users where idUtilizator=:uid');
        $this->db->bind('uid',$uid);
        $this->db->execute();
    }

}