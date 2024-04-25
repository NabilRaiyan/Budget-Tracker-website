function validateForm() {
    console.log("hello")
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var position = document.getElementById("position").value;
    var annual_income = document.getElementById("annual_income").value;
    var years_experience = document.getElementById("years_experience").value;
    var industry = document.getElementById("industry").value;
  
    var errors = [];
  
    if (!industry) {
      errors.push("Industry must be selected.");
    }
  
    if (isNaN(annual_income) || annual_income <= 0) {
      errors.push("Annual income must be a number greater than 0.");
    }
  
    if (!position) {
      errors.push("Position must be specified.");
    }
  
    if (isNaN(years_experience) || years_experience < 0 || years_experience % 1 !== 0) {
      errors.push("Years of experience must be a positive integer.");
    }
  
    if (errors.length > 0) {
      displayErrors(errors);
      return false;
    }
  
    return true;
  }
  
  function displayErrors(errors) {
    var errorContainer = document.createElement("div");
    errorContainer.className = "error";
    errorContainer.textContent = errors.join("\n");
    document.getElementById("myForm").prepend(errorContainer);
  }
  