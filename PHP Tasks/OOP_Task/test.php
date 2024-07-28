<?php 
// require_once("user.php");

// $user1 = new User();
// $user2 = new User();
// $user3 = new User();

// var_dump($user1);
// var_dump($user2);
// var_dump($user3);


class Person {
    public $name;
    protected $age;
    private $socialSecurity;

    public function __construct($name, $age, $socialSecurity) {
        $this->name = $name;
        $this->age = $age;
        $this->socialSecurity = $socialSecurity;
    }

    public function getDetails() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }

    public function setSocialSecurity($ssn) {
        $this->socialSecurity = $ssn;
    }

    public function getSocialSecurity() {
        return $this->socialSecurity;
    }
}

// Define a subclass
class Employee extends Person {
    public function getAge() {
        return $this->age;
    }
}

$person = new Person("John Doe", 30, "123-45-6789");

// Access and display public property
echo "Public Name: " . $person->name . "<br>";

// Access public method to get details
echo $person->getDetails() . "<br>";

// Modify and access private property through public methods
$person->setSocialSecurity("987-65-4321");
echo "Social Security: " . $person->getSocialSecurity() . "<br>";

// Create an object of the Employee class
$employee = new Employee("Jane Smith", 28, "555-55-5555");

// Access and display public property from the subclass
echo "Employee Name: " . $employee->name . "<br>";

// Access protected property via public method in subclass
echo "Employee Age: " . $employee->getAge() . "<br>";

// Attempting to directly access private property will cause an error
// Uncommenting the line below will cause a fatal error
// echo $person->socialSecurity; // Fatal error: Uncaught Error: Cannot access private property Person::$socialSecurity

?>