document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Reset error messages
    document.getElementById('position-err').innerHTML = '';
    document.getElementById('income-err').innerHTML = '';
    document.getElementById('experience-err').innerHTML = '';
    document.getElementById('industry-err').innerHTML = '';

    
    // Validation
    const position = document.getElementById('position').value.trim();
    const annualIncome = parseFloat(document.getElementById('annual_income').value);
    const yearsOfExperience = parseInt(document.getElementById('years_experience').value);
    const industry = document.getElementById('industry').value.trim();
    
    let isValid = true;
    let position_err = '';
    let income_err = '';
    let industry_err = '';
    let experience_err = '';

    
    
    if (!industry) {
      industry_err += 'Please select an industry.<br>';
      isValid = false;
    }
    
    if (isNaN(annualIncome) || annualIncome <= 0) {
      income_err += 'Annual income must be a number greater than 0.<br>';
      isValid = false;
    }
    
    if (!position) {
      position_err += 'Please specify your position.<br>';
      isValid = false;
    }
    
    if (isNaN(yearsOfExperience) || yearsOfExperience < 0 || !Number.isInteger(yearsOfExperience)) {
      experience_err += 'Years of experience must be a positive integer.<br>';
      isValid = false;
    }
    
    // Display error message if any
    if (!isValid) {
        document.getElementById('position-err').innerHTML = position_err;
        document.getElementById('income-err').innerHTML = income_err;
        document.getElementById('experience-err').innerHTML = experience_err;
        document.getElementById('industry-err').innerHTML = industry_err;
        return;
    }
    
    // If validation successful, you can submit the form or perform further actions
    console.log({
      username,
      password,
      email,
      address,
      phone,
      position,
      annualIncome,
      yearsOfExperience,
      industry
    });
  });
  
  