<?php
//task-1
class Person {

    public $name;
    public $age;

    public function __construct($name, $age) {

        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {

        echo "My name is {$this->name} and I am {$this->age} years old.<br>";
    }
}
//task-2
class Student extends Person {
    public $mark;

    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }

    public function introduce() {
        parent::introduce(); // Calling the parent class introduce() method
    }

    public function calculate_grade_percentage() {
        return "{$this->mark}%";
    }
}

// Task-1 Output for Person class
$person = new Person("John", 30); 
$person->introduce(); 


//Task-2 Output for Student class
$student = new Student("John", 20, "85"); 
$student->introduce(); 
$gradePercentage = $student->calculate_grade_percentage(); 
echo "My grade percentage is {$gradePercentage}\n";

?>

