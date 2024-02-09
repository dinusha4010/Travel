<?php $title="Welcome admin";$pagetitle="Create Packages";include 'header.php';?>


<form name="create1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="package_name" required>
  <label for="floatingInput">Package Name</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" name ="description" id="floatingTextarea" style="height: 100px" required >Write Description</textarea>
  <label for="floatingTextarea">Package Description</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" name="price" required>
  <label for="floatingInput">Price (EUR)</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" name="duration" required>
  <label for="floatingInput">Duration ( 7,14,21,28) in days</label>
</div>

<div class="form-floating">
  <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example" name="image_link" required>
    <option selected>Open this select menu</option>
    <option value="images/Package/beach.jpg">Beach</option>
    <option value="images/Package/galle.jpg">Galle</option>
    <option value="images/Package/kandy.jpg">Kandy</option>
    <option value="images/Package/sigiri.jpg">Sigirya</option>
    <option value="images/Package/wild.jpg">wild</option>
    
  </select>
  <label for="floatingSelectDisabled">Choose photo</label>

  
</div>

<br><br>
<button type="submit" class="btn btn-light" name="submit">Submit</button>
</form>

<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $package_name = $_POST['package_name'];     
    $description = $_POST['description'];   
    $price = $_POST['price'];       
    $duration = $_POST['duration']; 
    $image_link = $_POST['image_link']; 

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO tour_packages (package_name, description, price, duration,image_link)
            VALUES ('$package_name', '$description', '$price', '$duration','$image_link')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<h3>New record added sucessfully</h3>";
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
<?php include 'footer.php';?>