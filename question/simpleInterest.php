<!-- S.I. = (P × R × T) / 100
 -->
<?php
$P = 1000; // Principal amount
$R = 5;    // Rate of interest
$T = 3;    // Time in years
$SI = ($P * $R * $T) / 100; // Simple Interest formula
echo "Simple Interest is: " . $SI;

$simpleTotalVAlue = $P + $SI;
echo "\nTotal Amount after " . $T . " years is: " . $simpleTotalVAlue;
?>