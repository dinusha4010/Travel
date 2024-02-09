<?php $title="Staff-response-Travel-Sri Lanka";$pagetitle="Modify and delete tour packages";include 'header.php';
if ($_SESSION['user_type']!=4) {
  
    header('Location: login.php');
    exit();
  }

include 'db.php';
// SQL query to retrieve data from the 'travel' table
$sql = "SELECT * FROM tour_packages";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Package Id</th>
                    <th>Package Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Duration</th>
                    <th>Image Link</th>
                    <th colspan='2'>Action</th>
                    

                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['package_id']}</td>
                <td>{$row['package_name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['price']}</td>
                <td>{$row['duration']}</td>
                <td>{$row['image_link']}</td>
                <td><a href='tour_update.php?id=$row[package_id]' class='btn btn-primary btn-sm' >Update</a></td>
                <td><a href='tour_remove.php?id=$row[package_id]' class='btn btn-danger btn-sm' >Delete</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

include 'footer.php'?>

