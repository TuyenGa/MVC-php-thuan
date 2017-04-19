<?php
require_once "Models/Model.php";
    class SinhVienModel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function dssv()
        {
            
            $sql = "SELECT * FROM `Dssv` Order by `Dssv`.age ASC";
            $result = $this->connect->query($sql);
            
            $lists = array();
            
            if($result->num_rows > 0)
            {
                while ($list = $result->fetch_assoc())
                {
                    $lists[] = $list;
                }
            }
            
            return $lists;
            
        }
        public function created($post)
        {
            $sql = "INSERT INTO `Dssv` (`id`, `name`, `age`, `address`) VALUES (NULL, '".$post['name']."', '".$post['age']."', '".$post['address']."');";
            $this->connect->query($sql);
        }
        public function edited($id)
        {
            $sql = "Select * from `Dssv` where Dssv.id = $id";
            $result = $this->connect->query($sql);
            $lists = array();
            $lists[] = $result->fetch_assoc();
            return $lists;
        }
        public function updated($post, $id)
        {
            $sql = "UPDATE `Dssv` SET `name` = '".$post['name']."', `age` = '".$post['age']."', `address` = '".$post['address']."' WHERE `Dssv`.`id` = $id;";
            $this->connect->query($sql);
        }
        public function destroied($id)
        {
            $sql = "DELETE FROM `Dssv` WHERE `Dssv`.`id` =$id";
            $this->connect->query($sql);
        }
    }