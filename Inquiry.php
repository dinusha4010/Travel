<?php  $title="Inquiry-Travel-Sri Lanka";$pagetitle="Inquiry Form";include 'header.php';?>

<section class="vh-50 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
          <h3>Please fill out the form below and we will get back to you as soon as possible.</h3>
          <form name="inquiry" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="first_name" required>
                    <label class="form-label" for="fullname"><p>First Name</p></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="last_name" required>
                    <label class="form-label" for="checkIn"><p>Last Name</p></label>
                  </div>

                </div>
              </div>

              

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" required>
                    <label class="form-label" for="emailAddress"><p>Email</p></label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phone" required>
                    <label class="form-label" for="phoneNumber"><p>Phone Number</p></label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-8">

                  <div class="form-outline">
                  <label class="form-label" for="fullname"><p>Inquiry</p></label>
                  <textarea class="form-control" placeholder="Write your inquiry here" name ="inquiry" id="floatingTextarea" style="height: 200px" required  ></textarea>
                  
                  </div>
                  
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
  
                </div> 
                </div>
                </div>
                </form>


                


<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $first_name = $_POST['first_name'];     
    $last_name = $_POST['last_name'];   
    $email = $_POST['email'];       
    $phone = $_POST['phone']; 
    $inquiry = $_POST['inquiry']; 

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO Inquiry (first_name, last_name, email, phone,inquiry)
            VALUES ('$first_name', '$last_name', '$email', '$phone','$inquiry')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "<h3> we will get back to you as soon as possible</h3>";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}else{

    echo "error";
}
?>
   
      </div>
    </div>
  </div>
</section>




<?php include 'footer.php';?>