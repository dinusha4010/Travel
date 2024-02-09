<?php 


$title="Staff-Travel-Sri Lanka";$pagetitle="Staff Functions";
include_once 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}

?>

<?php echo "<h1>". $_SESSION['user_name']."</h1>";?>




  <div class="container text-center col col-lg-9" >
  <div class="btn-group-vertical" role="group" aria-label="Vertical button group" >
  <a class="btn btn-primary" href="create_package.php" role="button">Create a new tour package</a>
  <a class="btn btn-primary" href="staff_view.php" role="button"> Modify and remove tour package</a>
  <a class="btn btn-primary" href="package.php" role="button"> View current  tour packages</a>
  <a class="btn btn-primary" href="staff_response.php" role="button">Reply to travellers inquiry</a>
</div>
</div>







<?php include 'footer.php';?>