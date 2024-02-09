<?php $title="Delete-Package-Travel-Sri Lanka";$pagetitle="Remove Package";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM tour_packages WHERE package_id= '$a'");
$row= mysqli_fetch_array($result);
?>


<form name="create1" method="post" action="">
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

<div class="form-floating">
  <select class="form-select" id="floatingSelectDisabled" aria-label="Floating label disabled select example" name="image_link" required value="<?php echo $row['image_link']; ?>">
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
<button type="submit" class="btn btn-danger" name="delete">Delete</button>
<a class="btn btn-primary" href="staff_view.php" role="button">Back</a>
</form>
<?php
if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM tour_packages where package_id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            // if you want to redirect to update page after updating
            header("location: staff_view.php");
        }
        else { echo "Record Not Deleted";}
        }

 include 'footer.php';?>