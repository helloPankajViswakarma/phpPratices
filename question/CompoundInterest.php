
<?php
class CompoundInterest
{
    public $P; // Principal
    public $R; // Rate (percent)
    public $T; // Time (years)

    public function __construct($P, $R, $T)
    {
        $this->P = $P;
        $this->R = $R;
        $this->T = $T;
    }

    public function calculateCI()
    {
        $A = $this->P * pow((1 + $this->R / 100), $this->T);
        return $A - $this->P;
    }
}

// Object creation and usage (outside the class)
$ci = new CompoundInterest(1000, 5, 3);
echo "Compound Interest = " . $ci->calculateCI();
?>