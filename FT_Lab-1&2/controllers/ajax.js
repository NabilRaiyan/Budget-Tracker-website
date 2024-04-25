document.getElementById('userLookupForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission
  
  const userId = document.getElementById('userId').value.trim();
  const userName = document.getElementById('userName').value.trim();
  
  // Make AJAX request
  const xhr = new XMLHttpRequest();
  const url = `ajax.php?id=${userId}&name=${userName}`;
  
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const response = xhr.responseText;
        document.getElementById('userInfo').innerHTML = response;
      } else {
        document.getElementById('userInfo').innerHTML = 'Error fetching user information.';
      }
    }
  };
  
  xhr.open('GET', url, true);
  xhr.send();
});
