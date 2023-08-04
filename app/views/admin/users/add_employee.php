<!DOCTYPE html>
<html>
<head>
    <title>Add New Employee</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form action="process_add_employee.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" required><br>

        <input type="submit" value="Add">
    </form>
    <p><a href="index.php">Back to Employee List</a></p>
</body>
</html>

