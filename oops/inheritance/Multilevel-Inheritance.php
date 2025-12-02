<?php
class A {
    public function greet() {
        echo "Hello from A\n";
    }
}
class B extends A {
    public function welcome() {
        echo "Welcome from B\n";
    }
}
class C extends B {
    public function message() {
        echo "Message from C\n";
    }
}

$objA = new A();
$objA->greet();  

$objB = new B();
$objB->greet(); 
$objB->welcome(); 

$objC = new C();
$objC->greet();   
$objC->welcome(); 
$objC->message(); 
?>