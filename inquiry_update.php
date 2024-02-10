<?php $title="update-Inquiry-Travel-Sri Lanka";$pagetitle="Update Inquiry";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Inquiry WHERE inquiry_id= '$a'");
echo '<div class="row justify-content-md-center">';
include 'function.php';
traverInquiry($result);
?>
<form name="create1" method="post" action="">
<div class="row justify-content-md-center">
<div class="col-md-3">
  <textarea class="form-control" placeholder="Write response here" name ="response" id="floatingTextarea" style="height: 100px" required ></textarea>
  <label for="floatingTextarea"><p></p></label>

<button type="submit" class="btn btn-light" name="submit">Record response</button>
<a class="btn btn-primary" href="staff_view.php" role="button">Back</a>
</div>
</div>
</form>

<?php 

if (isset($_POST['submit'])){
    
    $response = $_POST['response'];     
    $staff=$_SESSION['user_name'];
    

    $query = mysqli_query($conn,"UPDATE Inquiry set response='$response', reply_status='1', user_name='$staff' where inquiry_id='$a'");
    if($query){
        echo "<h3>Your information is updated Successfully</h3>";
        // if you want to redirect to update page after updating
        header("location: staff_response.php");
    }
    else {  echo "Error: "  . $conn->error;}
    }


$conn->close();
?>

<?php include 'footer.php';?>