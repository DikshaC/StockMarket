<?php

$error="";

$conn=new mysqli("localhost","root","","stock_data");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    if(isset($_POST['signup'])) {
        if (isset($_POST['username'])) {
            $username = $_POST["username"];
        }
        if (isset($_POST['password'])) {
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        }
        if (isset($_POST['name'])) {
            $name = $_POST["name"];
        }
        if (isset($_POST['phone'])) {
            $phone = $_POST["phone"];
        }
        if (isset($_POST['email'])) {
            $email = $_POST["email"];
        }
        if (isset($_POST['gender'])) {
            $gender = $_POST["gender"];
        }
        if ($username == "" || $name == "" || $phone == "" || $email == "" || $gender == "" || $password == "") {
           // echo  "enter everything";
            $msg = "Enter everything";
            header("Location: register.php?msg=$msg");
        }
        else {
            $sql = "SELECT * FROM person where username='$username' or email='$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               // echo "user or email already exists!!";
                  //  alert(user or email already exists);
                    $msg = "User or email already exists";
                    header("Location: register.php?msg=$msg");
                }

            else {

                $sql = "INSERT INTO person (NAME,gender,username,email,pass,phone) VALUES ('$name','$gender','$username','$email','$password','$phone')";
                $conn->query($sql);
                header("location: login.php");// Initializing Session
                //header("Location: http://localhost/StockMarket/frontend/login.php");


            }
        }
    }
}
$conn->close();

?>