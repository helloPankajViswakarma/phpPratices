<!-- <?php

class student
{
    public $name;
    public $email = [];

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

    }
    //methods to display data
    public function showDateails()
    {
        echo "name" . $this->name . "<br>";
        echo "subject <br>";

        foreach ($this->email as $email) {
            echo " _ " . $email . "" . $email . "";

        }
    }
}

$subjectsArray = ["hiipankajvishwakarma@gmail.com ", "satyamkumar@gmail.com", "sachin@gmail.com"];
$subjects = new student("pankaj", $subjectsArray);

$subjects->showDateails();
?> -->
<!-- 

<?php

class fruits
{
    public $items = [];
    public function showFruits()
    {
        print_r($this->items);
    }
}
$fruitObj = new fruits();
$fruitObj->items = ["apple", "banana", "mango", "grapes"];

$fruitObj->showFruits();
?> -->
















<!-- 



<?php

class Arrayfunct
{
    //member function
    public $items = [];

    public function showFruits()
    {
        print_r($this->items);
    }
}

//create function
$fruitObj = new Arrayfunct();
//pass the value 
$fruitObj->items = ["pankaj", "satyam", "shivam", "sanjay"];

//call function
$fruitObj->showFruits();

// foreach ($this->items as $item){


?> -->


<?php

class students
{
    public $name;
    public $age = [];
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }
    public function showDateails()
    {
        echo "name" . $this->name . "<br>";
        echo "subject <br>";

        foreach ($this->age as $age) {
            echo "_ " . $age . " " . $age . " ";
        }
    }

}
$studentArray = ["Satyam", 18, "location ", "area", "a"];
$sundeObj = new students("pankaj", $studentArray);
$sundeObj->showDateails();
?>


