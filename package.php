<?php
$title="Tour-Packages-Travel-Sri Lanka";$pagetitle="Choose your package";include 'header.php';
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM tour_packages";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
    

              echo '<div class="col-md-3">
              <div class="card">
                <img src="' . $row['image_link'] . '" class="card-img-top" alt="Placeholder Image">
                <div class="card-body">
                  <h3 class="card-title">' . $row['package_name'] . '</h3>
                  <p class="card-text">' . $row['description'] ."<br><br>Duration : ". $row['duration']." Days <br><br>Price : EUR". $row['price'].'</p>
                  <a href="#" class="btn btn-primary">Book</a>
                </div>
              </div>
            </div>';
    

              
    }

    
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>

<?php include 'footer.php';?>