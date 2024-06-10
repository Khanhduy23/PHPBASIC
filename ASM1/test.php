<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }
}

$student = new Student("John", 20, "A");

foreach ($student as $property => $value) {
    echo ucfirst($property) . ": " . $value . "<br>";
}
?>
