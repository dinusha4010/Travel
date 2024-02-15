<?php  $title="Event-Travel-Sri Lanka";$pagetitle="UP COMING EVENTS";include 'header.php';?>

<h2>Traveler's Event Form</h2>

<form method="post" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="eventname">Event Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control  " id="eventname" placeholder="Enter your event name" name="ename" required>
            </div>
</div>
            <div class="row">
            <div class="col">
                <label for="description">Description:</label>
                <textarea class="form-control" placeholder="Write your inquiry here" name ="description" id="floatingTextarea" style="height: 200px" required  ></textarea>
            </div>
</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="">Location:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="location" placeholder="Enter your location" name="location" required>
            </div>
        </div>
            
        </div>
         </div>
    
  <div class="form-group">
                <label for="eventDate">Event Date</label>
                <div class="col-sm-2">
                <input type="date" class="form-control" id="eventDate" name="eventdate" placeholder="Select Date">
            </div>
</div>  
    <br><br>
    <div class="form-floating mb-3">
  <input type="file" class="form-control" id="floatingInput" name="fileToUpload" required>
  <label for="floatingInput">Upload Image</label>
</div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    

        <?php

//what to do with the data.isset will take only added info.it will check before sumitting are there oxes empty
if (isset($_POST['submit'])) {

 
 $name = $_POST['ename'];
 $date = $_POST['eventdate'];
 $location = $_POST['location'];
 $description = $_POST['description'];
 include 'function.php';
    $image_link=imageUpload();

// connect to the database server .refer db.php
include 'db.php';

//write a sql statement to insert data
$sql = "insert into events (name,date,location,description,image_link)  
       values ('$name','$date','$location','$description','$image_link')";  //same as local host 85 the one created table


       
if ($conn->query($sql)=== TRUE) {

    echo "Your data was recorded";

}
else {
   echo "Error" .$sql . "<br>" .$conn->error;
}
//close the database connection connection


$conn->close();
}else
{

    
}


include 'db.php';
// SQL query to retrieve data from the 'travel' table
$sql = "SELECT * FROM events";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Description</th>
                    <th>Location </th>
                    <th>Date</th>
                
                    <th>Action</th>
                    

                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['location']}</td>
                <td>{$row['date']}</td>
                
                <td><a href='event_remove.php?id=$row[event_id]' class='btn btn-danger btn-sm' >Delete</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();


?>



<?php  include 'footer.php';?>
