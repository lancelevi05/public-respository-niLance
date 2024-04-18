<?php

class Calculator {
    // Properties
    private $num1;
    private $num2;

    // Constructor
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // Methods
    public function add() {
        return $this->num1 + $this->num2;
    }

    public function subtract() {
        return $this->num1 - $this->num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }

    public function divide() {
        if ($this->num2 != 0) {
            return $this->num1 / $this->num2;
        } else {
            return "Error: Division by zero!";
        }
    }
}

// Instantiate an object of the Calculator class
$calculator = new Calculator(10, 5);

// Test each method
echo "Addition: " . $calculator->add() . "\n";
echo "Subtraction: " . $calculator->subtract() . "\n";
echo "Multiplication: " . $calculator->multiply() . "\n";
echo "Division: " . $calculator->divide() . "\n";
?>
