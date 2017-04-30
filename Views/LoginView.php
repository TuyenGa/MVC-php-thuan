<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginView
 *
 * @author Vuong
 */
class LoginView {
    public function formLogin()
    {
        require_once 'Template/Login.php';
    }
    public function formRegister()
    {
        require_once 'Template/Register.php';
    }
}
