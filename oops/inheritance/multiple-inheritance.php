<?php
trait Logger {
    public function log($msg) {
        echo "Log: $msg\n";
    }
}
trait Auth {
    public function authenticate() {
        echo "User authenticated\n";
    }
}
class User {
    use Logger, Auth;
}

$objUser = new User();
$objUser->log("This is a log message.");   
$objUser->authenticate();                  
?>