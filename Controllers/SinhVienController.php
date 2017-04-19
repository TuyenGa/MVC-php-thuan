<?php
require_once('Models/SinhVienModel.php');
require_once('Views/SinhVienView.php');
    class SinhVienController
    {
        protected $model = null;
        protected $view = null;
        public function __construct()
        {
            $this->model = new SinhVienModel();
            $this->view = new SinhVienView();
        }
        public function danhSachSV()
        {
            $dssv=$this->model->dssv();
            $this->view->dssv($dssv);
            
        }
        public function create()
        {
            $this->view->formAdd();
        }
        public function store()
        {
            $post = array('name' => $_POST['name'],'age' => $_POST['age'], 'address' =>$_POST['address']);

            $this->model->created($post);
            
            return $this->danhSachSV();
        }
        public function edit($id)
        {
            $sv = $this->model->edited($id);
            $this->view->formEdit($sv);
        }
        public function update($id)
        {
            $post = array('name'=> $_POST['name'],'age' => $_POST['age'],'address' => $_POST['address']);

            $this->model->updated($post,$id);
            
            return $this->danhSachSV();
        }
        public function destroy($id)
        {
            $this->model->destroied($id);
            return $this->danhSachSV();
        }
    }