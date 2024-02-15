<?php $title="Inquiry-response-Travel-Sri Lanka";$pagetitle=" travellers inquiry history";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
?>

<form name="create1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="row">
<div class="col-md-2">
  <input type="date" class="form-control" id="floatingInput" name="start_date" required>
  <label for="floatingInput"><p>Start Date</p></label>
</div>
<div class="col-md-2">
  <input type="date" class="form-control" id="floatingInput" name="end_date" required>
  <label for="floatingInput"><p>End Date</p></label>

</div>
<div class="col-md-2">
<button type="submit" class="btn btn-light" name="filter_date">Filter By date</button>
</div>
<br><br>

</div>
</form>
<form name="phone" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="row">
<div class="col-md-2">
  <input type="number" class="form-control" id="floatingInput" name="phone" required>
  <label for="floatingInput"><p>Phone number</p></label>
</div>

<div class="col-md-4">
<button type="submit" class="btn btn-light" name="filter_phone">Filter By Phone numbber</button>
</div>
</div>
</form>

<form name="email" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="row">
<div class="col-md-2">
  <input type="email" class="form-control" id="floatingInput" name="email" required>
  <label for="floatingInput"><p>Email</p></label>
</div>

<div class="col-md-4">
<button type="submit" class="btn btn-light" name="filter_email">Filter By Email</button>
</div>
</div>
</form>

<?php
if (isset($_POST['filter_date'])) {
  // Retrieve data from the form and store it in variables
  $start_date = $_POST['start_date'];     
  $end_date = $_POST['end_date'];   
  

  // Include the database connection file
  include 'db.php';
// SQL query to retrieve data from the table
$sql = "SELECT * FROM Inquiry where reply_status=1 and (inquiry_date between '$start_date' and '$end_date')";

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
}
?>

<?php
if (isset($_POST['filter_phone'])) {
  // Retrieve data from the form and store it in variables
  $phone = $_POST['phone'];     
    
  

  // Include the database connection file
  include 'db.php';
// SQL query to retrieve data from the table
$sql = "SELECT * FROM Inquiry where reply_status=1 and phone=$phone";

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
}
?>

<?php
if (isset($_POST['filter_email'])) {
  // Retrieve data from the form and store it in variables
  $email = $_POST['email'];     
    
  

  // Include the database connection file
  include 'db.php';
// SQL query to retrieve data from the table
$sql = "SELECT * FROM Inquiry where reply_status=1 and email='$email' ";

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
}
?>

<?php include 'footer.php';?>