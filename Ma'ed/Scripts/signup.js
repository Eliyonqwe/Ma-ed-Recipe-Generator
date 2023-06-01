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


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 20) {
      document.getElementById("header").style.top = "0";
    } else {
      document.getElementById("header").style.top = "-50px";
    }
 }

const sr = ScrollReveal({
    distance : '45px',
    duration : 2700,
    reset : true, 
})

sr.reveal('.item4', { delay:350, origin:'right'})
sr.reveal('.item5', { delay:350, origin:'right'})