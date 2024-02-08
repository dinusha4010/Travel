<?php

//what to do with the data.isset will take only added info.it will check before sumitting are there oxes empty
if (isset($_POST['submit'])) {

 $full_name = $_POST['full_name'];//code name
 $check_in = $_POST['check_in'];
 $number_of_heads = $_POST['number_of_heads'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $country = $_POST['country'];
 $gender = $_POST['gender'];

// connect to the database server .refer db.php
include 'db.php';

//write a sql statement to insert data
$sql = "insert into Traveller (first_name,last_name,city,groupId)  
       values ('$full_name','$check_in','$number_of_heads','$email',$phone,$country)";  //same as local host 85 the one created table


       
if ($conn->query($sql)=== TRUE) {

    echo "Your data was recorded";

}
else {
   echo "Error"; $sql . "<br>" .$conn->error;
}
//close the database connection connection


$conn->close();
}




?>