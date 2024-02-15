<?php
$title="Tour-Packages-Travel-Sri Lanka";$pagetitle="Choose your package";include 'header.php';
include 'db.php';?>
<form name="create1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="row">
<div class="col-md-2">
  <input type="number" class="form-control" placeholder="Low price" id="floatingInput" name="low_price" required>

</div>
<div class="col-md-2">
  <input type="number" class="form-control" placeholder="High price" id="floatingInput" name="high_price" required>


</div>
<div class="col-md-2">
<button type="submit" class="btn btn-light" name="filter_price_range">Filter by price range</button>
</div>
<br><br>

</div>
</form>
<form name="phone" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="row">


<div class="col-md-4">
<button type="submit" class="btn btn-light" name="filter_price">Price Low to High</button>
</div>
</div>
</form>

<?php

if (isset($_POST['filter_price_range']))
{

    $low_price=$_POST['low_price'];
    $high_price=$_POST['high_price'];

    $sql = "SELECT * FROM tour_packages where price between $low_price and $high_price " ;

}elseif(isset($_POST['filter_price_range'])){

    $sql = "SELECT * FROM tour_packages orderby price";
}else{

    $sql = "SELECT * FROM tour_packages ";
}



// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
   
 echo '<div class="row justify-content-md-center">';
    // Loop through the result set and display data in rows
    include 'function.php';
    
    traverlPackage($result);
echo '</div>';
    
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>


<?php include 'footer.php';?>