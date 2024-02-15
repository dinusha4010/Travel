<?php
$title="Events-Travel-Sri Lanka";$pagetitle="Upcoming Events";include 'header.php';
include 'db.php';
// Execute the SQL query and store the result

$sql = "SELECT * FROM events ";

$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   
 echo '<div class="row justify-content-md-center">';
    // Loop through the result set and display data in rows
      
    while ($row = $result->fetch_assoc()) {
    

        echo '<div class="col-md-3">
        <div class="card">
          <img src="' . $row['image_link'] . '" class="card-img-top" alt="Placeholder Image">
          <div class="card-body">
            <h3 class="card-title">' . $row['name'] . '</h3>
            <p class="card-text">' . $row['description'] ."<br><br>location : ". $row['location']." Days <br><br>Date : ". $row['date'].'</p>
            
          </div>
        </div>
      </div>';
    }

    

echo '</div>';
    
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>


<?php include 'footer.php';?>