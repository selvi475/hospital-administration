<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Patient</title>
</head>
<body>
    <h2>Add New Patient</h2>
    <form action="add_patient_process.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label>Date of Birth:</label>
        <input type="date" name="dob" required><br><br>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other<br><br>
        
        <label>Address:</label>
        <textarea name="address" rows="4" required></textarea><br><br>
        
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        
        <label>Email:</label>
        <input type="email" name="email"><br><br>
        
        <input type="submit" value="Add Patient">
    </form>
</body>
</html>
