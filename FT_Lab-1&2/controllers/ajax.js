// AJAX code 
document.getElementById('getUserButton').addEventListener('click', function() {
    const userId = document.getElementById('userId').value.trim();
    const userName = document.getElementById('userName').value.trim();
    
    // Make AJAX request
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `ajax.php?id=${userId}&name=${userName}`, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Request successful
          const response = JSON.parse(xhr.responseText);
          if (response.error) {
            // User not found
            console.error(response.error);
          } else {
            // User found, do something with the data
            console.log(response);
          }
        } else {
          // Request failed
          console.error('Failed to fetch user');
        }
      }
    };
    xhr.send();
  });
  