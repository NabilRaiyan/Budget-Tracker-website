<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>User Lookup</title>
</head>
<body>
  <div class="container">
    <h2>User Lookup</h2>
    <form id="userLookupForm">
        <div class="form-group">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId" required>
        </div>
        <!-- <div class="form-group">
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName">
        </div> -->
        <div class="form-group">
            <button id="getUserButton" type="submit">Search</button>
        </div>
    </form>

    <div id="userInfo"></div>

  </div>
  <script src="../controllers/ajax.js"></script>
</body>
</html>
