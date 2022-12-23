<?php

   $connection = mysqli_connect('localhost','root','','travel_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $jml = $_POST['jml'];
      $kirim = $_POST['kirim'];
      $arrival = $_POST['arrival'];

      $request = " insert into book_form(name, email, phone, address, location, jml, kirim, arrival) values('$name','$email','$phone','$address','$location','$jml','$kirim','$arrival') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>