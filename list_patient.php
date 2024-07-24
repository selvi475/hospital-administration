<?php
include 'config.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Patients List</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Registration Date</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['registration_date'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No patients found";
}

$conn->close();
?>
