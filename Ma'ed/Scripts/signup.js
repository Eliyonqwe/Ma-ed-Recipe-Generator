const togglePassword = document.getElementById('toggler1');
  const password = document.getElementById('password1');
const togglePassword2 = document.getElementById('toggler2');
  const password2 = document.getElementById('password2');

  
  
  togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('far fa-eye-slash');
});
  togglePassword2.addEventListener('click', function(e) {
    // toggle the type attribute
    const type2 = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type2);
    // toggle the eye slash icon
    this.classList.toggle('far fa-eye-slash');
});