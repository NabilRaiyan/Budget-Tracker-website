
document.getElementById("userLookupForm").addEventListener("submit", function(event) {
  // Preventing the default form submission
  event.preventDefault();

  // Creating a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Retrieving the user ID and name from the form
  var userId = document.getElementById("userId").value;
  var userName = document.getElementById("userName").value;

  // Setting up the AJAX request
  xhr.open("GET", "../models/mydb.php?id=" + userId&userName, true);

  // Sending the AJAX request
  xhr.send();

  // Handling the AJAX response
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          // Parsing the JSON response
          var userData = JSON.parse(xhr.responseText);

          // Displaying the user information
          var userInfoDiv = document.getElementById("userInfo");
          userInfoDiv.innerHTML = "<p>User ID: " + userData.id + "</p><p>User Name: " + userData.name + "</p>";
      }
  };
});
