<?php
    class SinhVienView
    {
        public function dssv($dssv)
        {
            require_once('Template/DanhSachSinhVien.php');
        }
        public function formAdd()
        {
            require_once('Template/ThemSinhVien.php');
        
        }
        public function formEdit($sv)
        {
            require_once('Template/SuaSinhVien.php');
        }
    }