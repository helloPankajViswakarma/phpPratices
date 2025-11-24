<html>

<head>
    <title>Sample Form</title>
</head>

<body>
    <!-- <form action="testForm.php" method="get"> -->
    <form action="" <?php echo "$_SERVER[PHP_SELF]" ?> method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>


    <?php
    if (isset($_GET["submit"])) {
        echo $_GET['name'] . "<br>";
        echo $_GET['email'] . "<br>";
    }
    ;

    ?>

</html>