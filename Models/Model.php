<?php
    class Model
    {
        protected $connect = null;
        public function __construct()
        {
            $this->connectsql();
        }
        public function connectsql()
        {
            $this->connect = new mysqli('localhost','root','','vuongquangtuyen_mvc');
            if($this->connect->errno)
            {
                return "loi ket noi ".$this->connect->error;
            }
            return $this->connect;
        }
    }