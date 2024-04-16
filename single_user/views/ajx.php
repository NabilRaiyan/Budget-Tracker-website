

<?php
 include "../controllers/ajax_controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>

    <label for="">Enter Text</label>
    <input type="text" name="" id="user_text" onkeyup=loadDoc()>

    <p id="output"></p>
    
</body>

<script src="../js/myscript.js"></script>
</html>