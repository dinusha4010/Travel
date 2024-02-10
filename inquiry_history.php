<?php $title="Inquiry-response-Travel-Sri Lanka";$pagetitle=" travellers inquiry history";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
?>



<?php
include 'db.php';
// SQL query to retrieve data from the table
$sql = "SELECT * FROM Inquiry where reply_status=1";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   
 echo '<div class="row justify-content-md-center">';
    // Loop through the result set and display data in rows
    include 'function.php';
    
    traverInquiryHistory($result);

    echo'</div>';
} else {
    // Display a message if no results are found
    echo "<h3>No History to be display</h3>";
}
// close the connection when done
$conn->close();
?>

<?php include 'footer.php';?>