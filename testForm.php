<?php
// echo "<h2>Received GET Data:</h2>";
echo "<h2>Received GET Data:</h2>";
echo "<pre>";
print_r($_GET);
echo "<pre>";
// print_r($_POST);
// print_r($_REQUEST);

echo "<pre>";
print_r($_SERVER);
echo "<pre>";

echo "$_SERVER[MYSQL_HOME]";
echo "$_SERVER[HTTP_HOST]";
// echo  $_POST['name'];
// echo $_REQUEST['name'];
?>