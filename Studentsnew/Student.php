<?php
class Student {
    public $id = '';
    public $name;
    public $age;


//вернуть id
    public function getId(){
    return $this->id;
    }
//Задать имя
    public function setName($name){
        $this->name = $name;
    }
//вернуть имя
    public function getName(){
        return $this->name;
    }
//Задать возраст
    public function setAge($age){
        $this->age = $age;
    }
//вернуть возраст
    public function getAge(){
        return $this->age;
    }
//проверка возраста на совершеннолетие
    public function isAgeCorrect($age){
            if ($age >= 18){
                return 'Совершеннолетний';
            } else {
                return 'Несовершеннолетний';
            }
    }
}
