<!-- Simple form with required input from the instructions  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<!-- This form will then be submitted to success.php  -->
<form action="success.php" method="POST">
  <label for="first-name">First Name:</label>
  <input type="text" id="first-name" name="first-name" required><br>
  <label for="last-name">Last Name:</label>
  <input type="text" id="last-name" name="last-name" required><br>
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" required><br>
  <label for="gender">Gender:</label>
  <select id="gender" name="gender" required>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>