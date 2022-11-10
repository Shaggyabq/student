<?php

class Crud{
    public $db;
private $id;
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    public function create($table , $name , $age){
        mysqli_query($this->db->connect, "INSERT INTO `$table` (`id`, `name`, `age`) VALUES (NULL, '$name','$age')");
    }


    public  function read($table){
        $item = mysqli_query($this->db->connect,"SELECT * FROM `$table`");

        // item <- data...
        $item = mysqli_fetch_all($item);
        return $item;
    }


    public function update($table,$id,$name,$age)
    {
       mysqli_query($this->db->connect,"UPDATE `$table` SET `name` = '$name', `age` = '$age' WHERE `$table`.`id` = '$id'");
    }

    public function delete($table,$id){
        mysqli_query($this->db->connect, "DELETE FROM `$table` WHERE `Students`.`id` = '$id'");
    }
    public function getOne($table,$id){
        $student =  mysqli_query($this->db->connect,"SELECT * FROM `$table` WHERE `id` = '$id'");
        $student = mysqli_fetch_assoc($student);
        return $student;
    }

}