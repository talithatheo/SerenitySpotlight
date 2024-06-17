document.getElementById('showSignUp').addEventListener('click', function() {
    document.getElementById('signInSection').style.display = 'none';
    document.getElementById('signUpSection').style.display = 'block';
  });
  
  document.getElementById('showSignIn').addEventListener('click', function() {
    document.getElementById('signUpSection').style.display = 'none';
    document.getElementById('signInSection').style.display = 'block';
  });
  
  document.getElementById('registerButton').addEventListener('click', function() {
    // Redirect to sign in page after registration
    document.getElementById('signUpSection').style.display = 'none';
    document.getElementById('signInSection').style.display = 'block';
  });
  
  document.getElementById('signInButton').addEventListener('click', function() {
    // Redirect to index.html after sign in
    window.location.href = 'index.html';
  });
  