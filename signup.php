<?php
    include_once("config.php");
    if(isset($_POST['Submit']))
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $department = $_POST['dept'];
        $phone = $_POST['mphone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //checking empty fields
        if(empty($firstname)||empty($lastname)||empty($department||empty($phone)||empty($email)||empty($password)))
        {
            if(empty($firstname))
            {
                echo "<font color='red'>First name is empty.</font></br>";
            }
            if(empty($lastname))
            {
                echo "<font color='red'>Last name is empty.</font></br>";
            }
            if(empty($department))
            {
                echo "<font color='red'>Department is empty.</font></br>";
            }
            if(empty($phone))
            {
                echo "<font color='red'>Phone is empty.</font></br>";
            }
            if(empty($email))
            {
                echo "<font color='red'>Email is empty.</font></br>";
            }
            if(empty($password))
            {
                echo "<font color='red'>Password is empty.</font></br>";
            }
        }
        else
        {
            //inserting data to db
            $type = "ordinary";
            $result = mysqli_query($mysqli, "INSERT INTO users (pwd,firstname,lastname,dept,phone,email,type) VALUES ('$password','$firstname','$lastname','$department','$phone','$email','$type')");
            //display success message
            echo "<font color='green'>Thank You For Registering With Us!</font></br>";
        }
    }
?>


