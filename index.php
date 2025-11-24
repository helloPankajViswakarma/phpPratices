<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
}
?>

<?php
$i = 0;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}
?>


<?php
$numbers = range(0, 10); // creates array [0,1,2,...,10]
foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>



<?php
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
?>
<?php
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
?>






<?php
$name = "Pankaj";
$age = 21;

echo "My name is " . $name . " and I am " . $age . " years old.";
?>

