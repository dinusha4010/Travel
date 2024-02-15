<?php

//what to do with the data.isset will take only added info.it will check before sumitting are there oxes empty
if (isset($_POST['submit'])) {

 $event_id = $_POST['event_id'];//code name
 $name = $_POST['name'];
 $date = $_POST['date'];
 $location = $_POST['location'];
 $description = $_POST['description'];
 

// connect to the database server .refer db.php
include 'db.php';

//write a sql statement to insert data
$sql = "insert into Traveller (event_id,name,date,location,description)  
       values ('$event_id','$name','$date','$location','$description')";  //same as local host 85 the one created table


       
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