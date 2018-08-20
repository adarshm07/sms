<?php
    include_once("config.php");
    $message="";
    if(count($_GET)>0)
    {
        //$email=$_GET["email"];
        //$pwd=$_GET["password"];
        $result = mysqli_query($mysqli, "SELECT * FROM users WHERE email='" . $_GET["email"] . "' AND pwd = '".$_GET["password"]."'");
        $count = mysqli_num_rows($result);
        if($count==0)
        {
            $message = "Invalid email or password";
        }
        else
        {
            $row = mysqli_fetch_array($result); 
            if($row['type']=="admin")
            {
                readfile("adminnew.html");
            }
            else if($row['type']=="teacher")
            {
                readfile("teachernew.html");
            }
            else if($row['type']=="student")
            {
                readfile("studentnew.html");
            }
        }
    }
?>


