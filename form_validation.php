<?php
    // define variables and set to empty values
    $email = $psw = $address = $address2 = $city = $state = $zip = $checkout= "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = test_input($_POST["email"]);
        $psw = test_input($_POST["password"]);
        $address = test_input($_POST["address"]);
        $address2 = test_input($_POST["address2"]);
        $city = test_input($_POST["city"]);
        $state = test_input($_POST["state"]);
        $zip = test_input($_POST["zip"]);
        $checkout = isset($_POST["gridCheck"]) ? "True" : "False";

        echo "Email     $email\r\n</br>";
        echo "Password  $psw\r\n</br>";
        echo "Address   $address\r\n</br>";
        echo "Address2  $address2\r\n</br>";
        echo "City      $city\r\n</br>";
        echo "State     $state\r\n</br>";
        echo "ZIP       $zip\r\n</br>";
        echo "Checkout  $checkout\r\n</br>";
    }
?>
