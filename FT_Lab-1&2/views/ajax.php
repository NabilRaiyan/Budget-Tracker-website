<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>AJAX</title>

</head>
<body>
<div class="container">
        <h1 class="form-group">FinTech</h1>
        <form method="post" id="">

            <div class="form-group">
                <label for="userId">Id:</label>
                <input type="text" id="userId" name="userId">
            </div>

            <div class="form-group">
                <label for="userName">Username:</label>
                <input type="text" id="userName" name="userName">
            </div>
            
            <div class="form-group">
                <button id="getUserButton" type="submit">Submit</button>
            </div>

        </form>

    </div>
    
    <script src="../controllers/ajax.js"></script>
</body>
</html>