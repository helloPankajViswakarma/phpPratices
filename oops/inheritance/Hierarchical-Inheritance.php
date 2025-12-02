<?php
class Employee {
  public $name;
  public $position;

  public function __construct($name, $position) {
    $this->name = $name;
    $this->position = $position;
  }

  public function introduce() {
    echo "I am {$this->name}, and I work as a {$this->position}.";
  }
}

class Manager extends Employee {
  public $team;

  public function __construct($name, $position, $team) {
    parent::__construct($name, $position);
    $this->team = $team;
  }

  public function introduce() {
    echo "I am {$this->name}, I work as a {$this->position}, and I manage the {$this->team} team.";
  }
}

class Developer extends Employee {
  public $programmingLanguage;

  public function __construct($name, $position, $programmingLanguage) {
    parent::__construct($name, $position);
    $this->programmingLanguage = $programmingLanguage;
  }

  public function introduce() {
    echo "I am {$this->name}, I work as a {$this->position}, and I specialize in {$this->programmingLanguage}.";
  }
}
$manager = new Manager("kriti", "Manager", "Sales");
$developer = new Developer("Ayushi", "Developer", "PHP");

$manager->introduce();  
$developer->introduce(); 
?>