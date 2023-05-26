const togglePassword = document.getElementById('toggler');
  const password = document.getElementById('password');


  
  
  togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('far fa-eye-slash');
});