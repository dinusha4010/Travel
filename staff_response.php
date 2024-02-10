<?php $title="Staff-response-Travel-Sri Lanka";$pagetitle="Reply to travellers inquiry";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
?>



<?php
include 'db.php';
// SQL query to retrieve data from the table
$sql = "SELECT * FROM Inquiry where reply_status=0";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   
 echo '<div class="row justify-content-md-center">';
    // Loop through the result set and display data in rows
    include 'function.php';
    
    traverInquiry($result);
  echo '</div>';
    
} else {
    // Display a message if no results are found
    echo "<div class='text-center'>";
    echo "<h3>No Inquiry to be display</h3></div>";
}
// close the connection when done
$conn->close();
?>

<?php include 'footer.php';?>