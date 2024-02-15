<?php $title="Read-Accommodation-Sri Lanka";$pagetitle="Customer Details-Accommodation";include 'header.php';
include 'db.php';

// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM Traveller";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Number of Guests</th>
                    <th>Check In Date</th>
                    <th>Check Out Date</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['full_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['country']}</td>
                <td>{$row['number_of_heads']}</td>
                <td>{$row['check_in']}</td>
                <td>{$row['check_out_date']}</td>
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
<?php
include 'footer.php';

?>