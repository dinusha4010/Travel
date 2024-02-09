<?php
$title="Tour-Packages-Travel-Sri Lanka";$pagetitle="Choose your package";include 'header.php';
include 'db.php';?>


<?php
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM tour_packages";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   
 echo '<div class="row justify-content-md-center">';
    // Loop through the result set and display data in rows
    include 'function.php';
    
    traverlPackage($result);

    
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>

<?php include 'footer.php';?>