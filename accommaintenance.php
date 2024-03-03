<?php $title="Accommodation-Maintenance-Travel-Sri Lanka";$pagetitle="Accommodation Maintenance";include 'header.php';?>

<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
          <h3>Hotels</h3>
          <form name="inquiry" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

<div class="row mb-4">
    <label for="name" class="col-sm-4 col-form-label"><h4>Name:</h4></label>
    <div class="col-sm-3">
      <input type="text" class="form-label" name="name" id="name" placeholder="Name" maxlength="50" required>
      <br><p><span id="nameError"></span></p>
    </div>
</div>

<div class="row mb-4">
    <label for="Rating" class="col-sm-4 col-form-label"  ><h4>Rating :</h4></label>
    <div class="col-sm-2">
    <input type="number" class="form-label" name="Rating" id="rating" placeholder="Rating" step="0.01" required>
    <br><p><span id="ratingError"></span></p>
    </div>
</div>


 <div class="row mb-4">
    <label for="Location" class="col-sm-4 col-form-label"  ><h4>Location :</h4></label>
    <div class="col-sm-2">
    <input type="text" class="form-label" name="Location" placeholder="Location" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Price per night" class="col-sm-4 col-form-label"  ><h4>Price per night :</h4></label>
    <div class="col-sm-2">
    <input type="currency" class="form-label" name="Price per night" placeholder="Price_per_night" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Available rooms" class="col-sm-4 col-form-label"  ><h4>Available rooms :</h4></label>
    <div class="col-sm-2">
    <input type="number" class="form-label" name="Available rooms" placeholder="Available_rooms" required>
    </div>
</div>

<div class="row mb-4">
    <label for="Images" class="col-sm-4 col-form-label"  ><h4>Images :</h4></label>
    <div class="col-sm-2">
    
    <input type="file" class="form-control" id="floatingInput" name="fileToUpload" required>
  
    </div>
</div>

<button class="btn btn-primary" type="submit" name="submit">Submit</button>

<br><br>

</form>

<script>
    // function to validate name
    function validateName()
{
    const name=document.getElementById("name").value;
    const nameError=document.getElementById("nameError");

    if(name.length <4 || name.length>50)
   
    {
        nameError.innerHTML="Hotel Name must be between 4 & 50 characters";
        return false;

    }
    else{

        nameError.innerHTML="";
        return true;
    }

}


document.getElementById("name").addEventListener("input",validateName);

function validateRating()
{
    const rating=document.getElementById("rating").value;
    const ratingError=document.getElementById("ratingError");

    if (rating <0 || rating>5)
    {
        ratingError.innerHTML="Rating must be between 0 & 5 ";
        return false;

    }
    else{

        ratingError.innerHTML="";
        return true;
    }

}


document.getElementById("rating").addEventListener("input",validateRating);

</script>



<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $name = $_POST['name'];     
    $Location = $_POST['Location'];   
    $Price_per_night = $_POST['Price_per_night'];       
    $Available_rooms = $_POST['Available_rooms'];
    $Rating = $_POST['Rating'];

    include 'function.php';
    $Images=imageUpload();


    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO accommodation (name, location, price_per_night, availble_rooms, rating, images)
            VALUES ('$name', '$Location', '$Price_per_night', '$Available_rooms', '$Rating','$Images' )";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<h3> Data is recorded</h3>";
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



<?php include 'footer.php'; ?>

