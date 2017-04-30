<?php
require_once 'Models/LoginModel.php';
require_once 'SinhVienController.php';
require_once 'Views/LoginView.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Vuong
 */
class User {
    protected $model;
    protected  $view;
    protected $sinhvien ;
    public function __construct() {
        
        $this->model = new LoginModel();
        $this->view = new LoginView();
        $this->sinhvien = new SinhVienController();
    }
    public function getLogin()
    {
        $this->view->formLogin();
    }
    public function postLogin()
    {
      $result =   $this->model->login();
         if ($result == true) {
             $this->sinhvien->danhSachSV();
         }
        else {
                    echo 'sai ten dang nhap hoac mat khau';
        }
       
    }
    public function getRegsiter()
    {
        $this->view->formRegister();
    }
    public function postRegister()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpassword'];
        $post = array('username' => $username ,'password' => $password);
        if($confirmPassword != $password)
        {
            echo 'sai mat khau';
        }
        else {
            $this->model->register($post);
            return $this->getLogin();
        }
            
    }
}
