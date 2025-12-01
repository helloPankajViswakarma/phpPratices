

<?php

header('Content-type:application/json');
header('Access-Control-Allow-Origin: * ');


include "config.php";

$sql = "Select * from student";
$result = mysqli_query($conn, $sql) or die("Sql query failed");

if (mysqli_num_rows($result) > 0) {

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
   echo "this is the simple output",$output;
    echo json_encode($output);
} else {
    echo json_encode(array(
        'message'=> 'not reacod fund ',
        'status' => false
    ));
    // header('');
}

?>