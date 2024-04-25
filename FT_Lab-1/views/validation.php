<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="POST" id="myForm" onsubmit="return validateForm()">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username">
  <label for="password">Password:</label>
  <input type="password" id="password" name="password">
  <label for="confirm_password">Confirm Password:</label>
  <input type="password" id="confirm_password" name="confirm_password">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <label for="address">Address:</label>
  <input type="text" id="address" name="address">
  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone">
  <label for="position">Position:</label>
  <input type="text" id="position" name="position">
  <label for="annual_income">Annual Income:</label>
  <input type="number" id="annual_income" name="annual_income">
  <label for="years_experience">Years of Experience:</label>
  <input type="number" id="years_experience" name="years_experience">
  <label for="industry">Industry:</label>
  <select id="industry" name="industry">
    <option value="">Select Industry</option>
    <option value="IT">IT</option>
    <option value="Finance">Finance</option>
    <option value="Healthcare">Healthcare</option>
    <!-- Add more options as needed -->
  </select>
  <button type="submit">Submit</button>
</form>

<script src="../controllers/validation.js"></script>
</body>
</html>
