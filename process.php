<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "info@voltz.ltd";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $name, "From:" . $email);
    
    header('Location: https://voltz.ltd/success.html');
  }