<?php $title="Delete-Package-Travel-Sri Lanka";$pagetitle="Remove Package";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
  header('Location: login.php');
  exit();
}
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM events WHERE event_id= '$a'");
$row= mysqli_fetch_array($result);
?>


<form name="create1" method="post" action="">

<div class="form-group">
        <div class="row">
            <div class="col">
                <label for="eventname">Event Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control  " id="eventname" placeholder="Enter your event name" name="ename" required value="<?php echo $row['name']; ?>">
            </div>
</div>
            <div class="row">
            <div class="col">
                <label for="description">Description:</label>
                <input type="text" class="form-control" placeholder="Write your inquiry here" name ="description" id="floatingTextarea" style="height: 200px" required value="<?php echo $row['description']; ?>" ></textarea>
            </div>
</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="">Location:</label>
                <div class="col-sm-4">
                <input type="text" class="form-control" id="location" placeholder="Enter your location" name="location" required value="<?php echo $row['location']; ?>">
            </div>
        </div>
            
        </div>
         </div>
    
  <div class="form-group">
                <label for="eventDate">Event Date</label>
                <div class="col-sm-2">
                <input type="date" class="form-control" id="eventDate" name="eventdate" placeholder="Select Date" value="<?php echo $row['date']; ?>">
            </div>
</div>  

<button type="submit" class="btn btn-danger" name="delete">Delete</button> 
</form>
<?php
if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM events where event_id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            // if you want to redirect to update page after updating
            header("location: event_manage.php");
        }
        else { echo "Record Not Deleted";}
        }

 include 'footer.php';?>