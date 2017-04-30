<?php
require_once 'Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author Vuong
 */
class LoginModel extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from login where username = '".$username."' and password = '".$password."' ";
        $result =  $this->connect->query($sql);
        $list = $result->fetch_assoc();
        return $list;
    }
    public function register($post)
    {
        $sql = "INSERT INTO `login` (`id`, `username`, `password`) VALUES (NULL, '".$post['username']."', '".$post['password']."');";
        $this->connect->query($sql);
        
    }
}
