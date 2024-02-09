<?php $title="Staff-response-Travel-Sri Lanka";$pagetitle="Reply to travellers inquiry";include 'header.php';?>
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}


<?php include 'footer.php';?>