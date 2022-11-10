<?php

class Database
{
    private $host;
    private $login;
    private $password;
    private $db_name;
    public  $connect;

    public function __construct($host, $login, $password, $db_name)
    {
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->connect = mysqli_connect($this->host, $this->login, $this->password, $this->db_name);
        if (!$this->connect) {
            die ('Ошибка подключения');
        }
    }

}