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

    public function getProductIds($ids) {
        $this->db->query("select * from produs where idProdus in ($ids)");
//        $this->db->bind('ids',$ids);
        return $this->db->resultSet();
    }
    public function addProduct($nume,$numeRu,$pret,$imagePath,$categorie){
        $this->db->query('insert into produs(NumeProdus,numeProdusRu,Pret,ImagePath,categorie) value(:nume,:numeRu, :pret, :imagePath,:categorie)');
        $this->db->bind('nume',$nume);
        $this->db->bind('numeRu',$numeRu);
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
    public function getProductbyCategory($category) {
        if($category) {
            $this->db->query('select * from produs where categorie =:categorie');
            $this->db->bind('categorie', $category);
            return $this->db->resultSet();
        }
        return null;
    }
    public function updateProduct($id,$nume,$numeRu,$price,$imagePath,$category) {
        $this->db->query('update produs set pret=:price,numeProdus=:nume,numeProdusRu=:numeRu,imagePath=:imagePath,categorie=:category where idProdus=:id');
        $this->db->bind('id',$id);
        $this->db->bind('nume',$nume);
        $this->db->bind('numeRu',$numeRu);
        $this->db->bind('imagePath',$imagePath);
        $this->db->bind('category',$category);
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

    public function getProductsByStr($substr)
    {
        $this->db->query('select * from produs where NumeProdus like "%'.$substr.'%" or NumeProdusRu like "%'.$substr.'%"');
        $this->db->bind('substring',$substr);
        return $this->db->resultSet();
    }
    public function getRandomProducts($nr){
        $this->db->query('select * from produs ORDER BY RAND() LIMIT :N;');
        $this->db->bind('N',$nr);
        return $this->db->resultSet();
    }
    public function getProductsBAlcool(){
        $this->db->query("select * from produs where categorie= 'cafea rece' or categorie = 'apa' or categorie = 'sucuri' or categorie = 'energizante'");
        return $this->db->resultSet();
    }

    public function getProductsAlcool(){
        $this->db->query("select * from produs where categorie = 'vin' or categorie = 'coniac' or  categorie = 'vodka' or categorie = 'wiski' or categorie = 'bere'");
        return $this->db->resultSet();
    }
    public function getProductsAlim(){
        $this->db->query("select * from produs where categorie = 'Snack-uri' or  categorie = 'Zakuska la bere' or  categorie = 'arahide'  ");
        return $this->db->resultSet();
    }
    public function getAllHistory(){
        $this->db->query('select * from history_delivery');
        return $this->db->resultSet();
    }
    public function addToHistory($nume,$adresa,$mobile,$pret,$list){
        $this->db->query('insert into history_delivery(nume,adresa,mobile,pret_total,delivery_list) values(:nume,:adresa,:mobile,:pret_total,:delivery_list)');
        $this->db->bind('nume',$nume);
        $this->db->bind('adresa',$adresa);
        $this->db->bind('mobile',$mobile);
        $this->db->bind('pret_total',$pret);
        $this->db->bind('delivery_list',$list);
        $this->db->execute();
    }
}
