<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo '<h1> Welcome ' . $_POST["fname"] . ' ' . $_POST["lname"] . '</h1> <br>'; 
    echo '<h1> Your Email Address is ' . $_POST["email"] . '</h1> <br>';
    echo '<h1> Your Password has ' . strlen($_POST["psw"]) . ' characters </h1> <br>';

    if($_POST["psw"] == $_POST["cpsw"])
    {
      echo 'Your password is equal!';
    }
    else
    {
      echo 'Not Equal';
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      echo '<br> It is a POST DATA.';
    }
    
    else
    {
      echo '<br> It is not a POST DATA.';
    }
  }
?>