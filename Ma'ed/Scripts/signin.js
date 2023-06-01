const togglePassword = document.getElementById('toggler');
  const password = document.getElementById('password');


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

  sr.reveal('.containers555', { delay:350, origin:'right'})
  

  
  
  togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('far fa-eye-slash');
});