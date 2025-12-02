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