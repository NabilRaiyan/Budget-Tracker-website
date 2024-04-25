<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>User Lookup</title>
</head>
<body>
  <h2>User Lookup</h2>
  <form id="userLookupForm">
    <div>
      <label for="userId">User ID:</label>
      <input type="text" id="userId" name="userId" required>
    </div>
    <div>
      <label for="userName">User Name:</label>
      <input type="text" id="userName" name="userName" required>
    </div>
    <button type="submit">Search</button>
  </form>

  <div id="userInfo"></div>

  <script src="../controllers/ajax.js"></script>
</body>
</html>
