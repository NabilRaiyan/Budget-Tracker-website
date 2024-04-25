<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation using JS</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>FinTech</h1>
        <form method="post" id="myForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <select id="position" name="position">
                    <option value="">Select Position</option>
                    <option value="admin">Admin</option>
                    <option value="employee">Employee</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
            <div class="form-group">
                <label for="annual_income">Annual Income:</label>
                <input type="text" id="annual_income" name="annual_income">
            </div>
            <div class="form-group">
                <label for="years_experience">Years of Experience:</label>
                <input type="text" id="years_experience" name="years_experience">
            </div>
            <div class="form-group">
                <label for="industry">Industry:</label>
                <select id="industry" name="industry">
                    <option value="">Select Industry</option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Education">Education</option>
                </select>
            </div>
            <div class="form-group">
                <button class="form-submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <script src="../controllers/validation.js"></script>
</body>
</html>
