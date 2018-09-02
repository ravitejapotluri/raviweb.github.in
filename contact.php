<?php
$con = mysqli_connect("localhost","root","","contact");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ref = $_POST['ref'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO contact(name,email,ref,subject,message) VALUES('$name','$email','$ref','$subject','$message')";
    $query_insert = mysqli_query($con,$query);
    if(!$query_insert){
        die("Failed".mysqli_error($con));
    }else{
        echo "Data inserted!";
    }
}

 
?>