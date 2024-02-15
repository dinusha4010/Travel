<?php $title="Modify-packages-Travel-Sri Lanka";$pagetitle="Modify remove tour packages";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM tour_packages WHERE package_id= '$a'");
$row= mysqli_fetch_array($result);
$image_link=$row['image_link'];
?>
<h2> Update your information below: </h2>
<form name="create1" method="post" action="" enctype="multipart/form-data">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" name="package_name" required value="<?php echo $row['package_name']; ?>">
  <label for="floatingInput">Package Name</label>
</div>
<div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" name ="description" id="floatingTextarea" style="height: 100px" required ><?php echo $row['description']; ?></textarea>
  <label for="floatingTextarea">Package Description</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" name="price" required value="<?php echo $row['price']; ?>">
  <label for="floatingInput">Price (EUR)</label>
</div>
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" name="duration" required value="<?php echo $row['duration']; ?>">
  <label for="floatingInput">Duration ( 7,14,21,28) in days</label>
</div>
<div class="form-floating mb-3">
  <input type="file" class="form-control" id="floatingInput" name="fileToUpload" >
  <label for="floatingInput"></label>
  <img src='<?php echo $row['image_link']; ?>' width='100' height='100' alt='Image'>
</div>


<br><br>
<button type="submit" class="btn btn-light" name="submit">Submit</button>
<a class="btn btn-primary" href="staff_view.php" role="button">Back</a>
</form>


<?php 

if (isset($_POST['submit'])) {

    // Retrieve data from the form and store it in variables
    $package_name = $_POST['package_name'];     
    $description = $_POST['description'];   
    $price = $_POST['price'];       
    $duration = $_POST['duration']; 
    $file_status= $_POST['fileToUpload']; 
    include 'function.php';

    if(!empty($file_status))
    {
    $image_link=imageUpload();
    }

    // Include the database connection file
    include 'db.php';

    $query = mysqli_query($conn,"UPDATE tour_packages set package_name='$package_name', description='$description', price='$price', duration='$duration',image_link='$image_link' where package_id='$a'");
    if($query){
        echo "<h3>Your information is updated Successfully</h3>";
        // if you want to redirect to update page after updating
        header("location: staff_view.php");
    }
    else {  echo "Error: " . $sql . "<br>" . $conn->error;}
    }


$conn->close();









include 'footer.php';
?>


