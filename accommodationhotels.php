<?php $title="Customize your Accommodation-Sri Lanka";$pagetitle="Customize your Hotel";include 'header.php';?>

<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
        
          <form name="inquiry" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

<div class="row mb-4">
    <label for="Full Name" class="col-sm-4 col-form-label"><h4>Full Name:</h4></label>
    <div class="col-sm-2">
      <input type="text" class="form-label" name="Full_Name" placeholder="Full_Name" required>
    </div>
</div>

<div class="row mb-4">
    <label for="email" class="col-sm-4 col-form-label"  ><h4>Email :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="email" placeholder="Email" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Phone Number" class="col-sm-4 col-form-label"  ><h4>Phone Number :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Phone Number" placeholder="Phone_Number" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Country" class="col-sm-4 col-form-label"  ><h4>Country :</h4></label>
    <div class="col-sm-2">    
    <input type="text" class="form-label" name="Country" placeholder="Country" required>
    </div>
    </div>

 <div class="row mb-4">
    <label for="Number_of_Guests" class="col-sm-4 col-form-label"  ><h4>Number of Guests :</h4></label>
    <div class="col-sm-2">
    <input type="number" class="form-label" name="Number_of_Guests" placeholder="Number_of_Guests" required>
    </div>
</div>



<div class="row mb-4">
    <label for="Check in date" class="col-sm-4 col-form-label"  ><h4>Check in date :</h4></label>
    <div class="col-sm-2">
    <input type="date" class="form-label" name="Check in date" placeholder="Check_in_date" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Check out date" class="col-sm-4 col-form-label"  ><h4>Check out date :</h4></label>
    <div class="col-sm-2">
    <input type="date" class="form-label" name="Check out date" placeholder="Check_out_date" required>
    </div>
</div>

<button class="btn btn-primary" type="submit" name="submit">Submit</button>

<br><br>

</form>

<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $Full_Name = $_POST['Full_Name'];     
    $email = $_POST['email'];   
    $Phone_Number = $_POST['Phone_Number'];       
    $Country = $_POST['Country']; 
    $Number_of_Guests = $_POST['Number_of_Guests'];
    $Check_in_date = $_POST['Check_in_date']; 
    $Check_out_date = $_POST['Check_out_date'];


    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO Traveller (full_name, email, phone, country, number_of_heads, check_in, check_out_date)
            VALUES ('$Full_Name', '$email', '$Phone_Number', '$Country','$Number_of_Guests','$Check_in_date','$Check_out_date')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<h3> we will get back to you as soon as possible</h3>";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}else{

    echo "error";
}
?>


?>
<?php include 'footer.php';?>