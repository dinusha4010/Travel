<?php 


$title="Staff-Travel-Sri Lanka";$pagetitle="Staff Functions";
include_once 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}

?>

<?php echo "<h1>". $_SESSION['user_name']."</h1>"
;?>




  





<?php include 'footer.php';?>