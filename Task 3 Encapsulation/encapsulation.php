<?php

class Employee {
    private $name;
    private $age;
    private $salary;
    
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->setSalary($salary); // Use the setter to ensure proper validation
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function getSalary() {
        return $this->salary;
    }
    
    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new InvalidArgumentException("Salary cannot be negative.");
        }
    }
}

// Create an employee instance
$employee = new Employee("Mr Komol", 30, 50000);

// Get employee information
echo "Name: " . $employee->getName() . "<br>";
echo "Age: " . $employee->getAge() . "<br>";

// Set and get employee salary
try {
    $employee->setSalary(55000);
    echo "Salary: " . $employee->getSalary() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

try {
    $employee->setSalary(-1000); // This will throw an exception
    echo "Salary: $" . $employee->getSalary() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

?>
