<?php  $title="Login-Travel-Sri Lanka";$pagetitle="Login";include 'header.php';
if(isset($_SESSION['user_type'])){
    if ($_SESSION['user_type']==4) {

        header('Location: staff.php');

    }
}
?>
<form method="post" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="row justify-content-md-center">
        <label for="userName" class="col-sm-2 col-form-label"><p>User Name</p></label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="userName">
        </div>
    </div>

    <div class="row justify-content-md-center">
        <label for="inputPassword" class="col-sm-2 col-form-label"><p>Password</p></label>
        <div class="col-sm-2">
            <input type="password" class="form-control" name="inputPassword">
            <button class="btn btn-primary" type="submit" name="submit">Login</button>
        </div>
    </div>
</form>

<?php
// Include the database connection file
include 'db.php';

if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $user_name = $_POST['userName'];
    $inputPassword = $_POST['inputPassword'];

    $sql = "SELECT * FROM user_login WHERE user_name='$user_name'";

    // Execute the SQL query and store the result
    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $password = $row['password'];

        if ($password === $inputPassword) {
            include 'function.php';
           
          
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['user_name']=$row['user_name'];
            $_SESSION['user_type']=$row['user_type'];
            
            userLogin();

        } else {
            echo "<p>Password error</p>";
        }
    } else {
        // Display a message if no results are found
        echo "<p>Please enter correct user ID</p>";
    }
}

// Close the connection when done
$conn->close();
?>






<?php include 'footer.php';?>
     