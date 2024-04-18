<?php

class Car {
    private $make;
    private $model;
    private $year;

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }
}

$car = new Car();
$car->setMake("Ford");
$car->setModel("Mustang");
$car->setYear(2024);

echo "Make: " . $car->getMake() . "<br>";
echo "Model: " . $car->getModel() . "<br>";
echo "Year: " . $car->getYear() . "<br>";
?>
