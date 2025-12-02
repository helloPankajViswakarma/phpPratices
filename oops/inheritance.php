<?php
class Animal {
    public $name;
    public function eat() {
        echo "$this->name is eating.\n";
    }
}
class Dog extends Animal {
    public function bark() {
        echo "$this->name is barking.\n";
    }
}
$dog = new Dog();
$dog->name = "Buddy";
$dog->eat();   
$dog->bark(); 
?>
<?php
class A {
    public function sayHello() {
        echo "Hello from A\n";
    }
}
class B extends A {
    public function sayHi() {
        echo "Hi from B\n";
    }
}
$objA = new A();
$objA->sayHello(); 
$objB = new B();
$objB->sayHello();  
$objB->sayHi();     
?>