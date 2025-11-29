<!-- <?php

class    student{
    public $name;
    public $email =[];

    public function __construct($name ,$email){
        $this->name = $name;
        $this->email = $email;

    }
    //methods to display data
public function showDateails(){
    echo "name" . $this->name. "<br>";
    echo "subject <br>";

    foreach ($this->email as $email){
        echo " _ ".$email."".$email."";
    
}
}
}

$subjectsArray =["hiipankajvishwakarma@gmail.com ","satyamkumar@gmail.com","sachin@gmail.com"];
$subjects = new student("pankaj" ,$subjectsArray);

$subjects->showDateails();
?> -->


<?php

class fruits {
    public $items = [];
    public function showFruits(){
        print_r($this->items);
}
}
$fruitObj =new fruits();
$fruitObj->items=["apple","banana","mango","grapes"];

$fruitObj->showFruits();
?>