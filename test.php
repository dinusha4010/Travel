<?php
include 'db.php';
$id='admin';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM userLogin where username='$id'";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserId</th>
                    <th>Password</th>
                    <th>level</th>
                    
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['userId']}</td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>{$row['level']}</td>
                
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>