<?php
    require_once "Controllers/SinhVienController.php";
    require_once 'Controllers/User.php';
    
    $sinhvienController = new SinhVienController();
    $user = new User();
   $action = $_GET['action'];
   if($action == 'login')
   {
       $user->getLogin();
   }
   if ($action == 'postlogin') {
    $user->postLogin();
}
   if($action == 'list')
   {
        $sinhvienController->danhSachSV();
   }
   if($action == 'create')
   {
       $sinhvienController->create();
   }
   if($action == 'store' )
   {
       $sinhvienController->store();
   }
   if($action == 'edit')
   {
       $id = $_GET['id'];
       $sinhvienController->edit($id);
   }
   if($action == 'update')
   {
       $id = $_GET['id'];
       $sinhvienController->update($id);
   }
   if($action == 'destroy')
   {
       $id = $_GET['id'];
       $sinhvienController->destroy($id);
   }
   if($action == 'register')
   {
       $user->getRegsiter();
   }
   if($action=='postregister')
   {
       $user->postRegister();
   }