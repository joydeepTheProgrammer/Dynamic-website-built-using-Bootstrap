<?php 

    if(isset($_POST['submit'])) {

     $con = mysqli_connect('localhost', 'root');

       
     mysqli_select_db($con, 'userdata');

    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $zip = $_POST['zip'];
     $message = $_POST['message'];

     
     $query = "INSERT INTO `userinfo` (name, email, address, city, state, zip, message) VALUES ('$user','$email','$address','$city','$state','$zip',' $message')";

     mysqli_query($con, $query);
     
     header('location:index.php');

    }
  
?>



