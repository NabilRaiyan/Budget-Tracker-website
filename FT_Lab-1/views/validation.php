<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post" id="myForm" onsubmit="return validateForm()">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address">
        </div>
        <div>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position">
        </div>
        <div>
            <label for="annual_income">Annual Income:</label>
            <input type="text" id="annual_income" name="annual_income">
        </div>
        <div>
            <label for="years_experience">Years of Experience:</label>
            <input type="text" id="years_experience" name="years_experience">
        </div>
        <div>
            <label for="industry">Industry:</label>
            <select id="industry" name="industry">
                <option value="">Select Industry</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Education">Education</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <script src="script.js"></script>
</body>
</html>
