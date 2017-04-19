<?php
    require_once "Controllers/SinhVienController.php";
    $sinhvienController = new SinhVienController();

   $action = $_GET['action'];

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