<?php
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $user_name = $_POST['userName'];     // First name
    $inputPassword = $_POST['inputPassword'];     // Last name
    
} else {
    // If there was an error in the query, display an error message
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    // Include the database connection file
    include 'db.php';

    $sql = "SELECT * FROM studentsinfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows == 1) {

    $row = $result->fetch_assoc();
    
      $user_id=$row['user_id'];
      $password=$row['password'];
      $user_type=$row['user_type'];

      if($password===$inputPassword)
      {

        include 'function.php';
        userLogin();


        } else {
        echo " password error";

      }



    
    

    
} else {
    // Display a message if no results are found
    echo "<h4>Plese enter correct user ID</h4>";
}
// close the connection when done
$conn->close();


?>  
