function validateForm() {
    var isValid = true;

    // Resetting previous error styles
    var inputFields = document.getElementsByTagName("input");
    for (var i = 0; i < inputFields.length; i++) {
        inputFields[i].classList.remove("error");
    }

    var industry = document.getElementById("industry").value;
    if (industry === "") {
        isValid = false;
        document.getElementById("industry").classList.add("error");
    }

    var annualIncome = document.getElementById("annual_income").value;
    if (isNaN(annualIncome) || parseFloat(annualIncome) <= 0) {
        isValid = false;
        document.getElementById("annual_income").classList.add("error");
    }

    var position = document.getElementById("position").value;
    if (position.trim() === "") {
        isValid = false;
        document.getElementById("position").classList.add("error");
    }

    var yearsExperience = document.getElementById("years_experience").value;
    if (isNaN(yearsExperience) || parseInt(yearsExperience) < 0 || yearsExperience % 1 !== 0) {
        isValid = false;
        document.getElementById("years_experience").classList.add("error");
    }

    if (!isValid) {
        // Prevent form submission
        event.preventDefault();
        // Display error message
        var errorDiv = document.createElement("div");
        errorDiv.className = "error-message";
        errorDiv.textContent = "Please fix the errors in the form.";
        var form = document.getElementById("myForm");
        form.appendChild(errorDiv);
    }

    return isValid;
}
