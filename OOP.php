<?php

class Student{

    public $name;
    public $surname;
    public $age;
    public $well;

    public function __construct($name, $surname, $age, $well) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->well = $well;
    }
    public function getInformation() {
        echo "Меня зовут $this->name фамилия $this->surname мне $this->age и я учусь на $this->well курсе\n";
    }
}
$student = new Student('Евгений', 'Забавко', 35, 5);
echo $student->getInformation(); 
echo '<br>';




class Car{
    public $brand;
    public $model;
    public $color;
    public $year;

    public function __construct($brand, $model, $color, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;

    }
    public function bestСar() {
        echo "Лучшее авто  $this->brand  $this->model  $this->color цвета $this->year года выпуска\n";
    }
}
$car = new Car('MAZDA', 6, 'Black', 2014);
$car1 = new Car('MAZDA', 5, 'Black', 2022);
echo $car->bestСar();
echo '<br>';
echo $car1->bestСar();
echo '<br>';



class Circle {

    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        echo $this->radius**2 * 3.14;
    }
}
$circle = new Circle(5);
$circle->calculateArea();
echo '<br>'; 



class Human{

    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function isAdult(){
        if ($this->age >= 18) {
            echo 'Взрослый';
        }
        else{
            echo 'Ребенок';
        }
    }
}
$human = new Human('Виталий', 11, 'М');
$human->isAdult();
