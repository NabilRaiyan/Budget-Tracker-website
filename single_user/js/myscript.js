
function loadDoc() {
    var xhttp = new XMLHttpRequest();
    var id = document.getElementById('user_text').value;
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("output").innerHTML = this.responseText;
      }
    };
    
    // ajax request send 
    xhttp.open("GET", "http://localhost/Budget_Tracker/single_user/controllers/ajax_controller.php?id=" + id, true);
    xhttp.send();
  }