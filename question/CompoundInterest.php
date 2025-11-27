<?php

class CompoundInterest
{
    //member variables
    public $P; // Principal amount
    public $R; // Rate of interest
    public $T; // Time in years

    // Constructor to initialize values
public function __construct($P, $R, $T)
{
    $this->P = $P=1000;
    $this->R = $R=5;
    $this->T = $T=3;
    
}
// ✅ Object creation
$ci = new CompoundInterest(1000, 5, 3);
echo "Compound Interest = " . $ci->calculateCI();

?>


    //member function to calculate compound interest
    public function calculateCI()
    {
        // Compound Interest formula: A = P (1 + R/100)^T
        $A = $this->P * pow((1 + $this->R / 100), $this->T);
        $CI = $A - $this->P; // Compound Interest = A - P
        return $CI;
    }
}

?>