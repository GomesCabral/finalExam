<?php

class User{
    private $nickname;
    private $email;
    private $password;
    private $admin;

    public function __construct($nickname, $email, $password)
    {
        $this->setNickname($nickname);
        $this->setEmail($email);
        $this->setPassword($password);

        $this->admin = false;
    }

    //nickname
    public function getNickname(){
        return $this->nickname;
    }


    public function setNickname($nickname){
        if(is_string($nickname)){
            if(strlen($nickname) > 4 && strlen($nickname) < 16){
                $this->nickname = $nickname;
            }else{
                echo 'The nickname must be between 8 and 16 characters';
            }
        }else{
            echo 'The nickname must be a string';
        }
    }

    public function getAdmin(){
        return $this->admin;
    }

    //email
    public function getEmail(){
        return $this->email;
    }


    public function setEmail($email){
        if(is_string($email)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->email = $email;
            }else{
                echo 'insert a valid email';
            }
        }else{
            echo 'The email must be a string';
        }
    }

    //password
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        if(is_string($password)){
            if(strlen($password) > 7 && strlen($password) < 17){
                $this->password = $password;
            }else{
                echo 'The password must be between 8 and 16 characters';
            }
        }else{
            echo 'The password must be a string';
        }
    }

    //edit password
    public function editPassword($oldPassword, $newPassword){
        if($oldPassword == $this->password){
            $this->password = $newPassword;
            echo 'password changed';
        }else{
            echo 'your password its not correct';
        }
    }
}

$user = new User('pedro', 'phgca@hotmail.com', 'qwertyyyy');
// $user ->editPassword('qwertyyyy', 'testeteste');
// echo $user->getEmail();
// echo '<br/>';
// echo $user->getPassword();
// echo '<br/>';
// echo $user->getNickname();


//AdminUser
class AdminUser extends User{
    private $admin = true;

    public function __construct($nickname, $email, $password)
    {
        parent::__construct($nickname, $email, $password);
    }
}


//RegularUser
class RegularUser extends User{
    private $cart;
    public $product;
    public $price;
    public $qnt;

    public function __construct($nickname, $email, $password, $cart)
    {
        parent::__construct($nickname, $email, $password);
        $this->setCart($cart);
    }

    //SET CART
    public function setCart(){
        $this->cart = array();
    }

    //ADD TO CART
    public function add_to_cart($product, $price){
        $this->product = $product;
        $this->price = $price;
        if($this->product && $this->price){
            $this->qnt = 1;
        if(in_array($product, $this->cart)){
            $this->cart[] += $product;
        }
        }
    }

    public function remove_from_array($product){
        unset($this->cart[$product]);
    }

    public function display(){
        foreach($this->cart as $item){
            echo $item . '<br/>';
        }
    }

}