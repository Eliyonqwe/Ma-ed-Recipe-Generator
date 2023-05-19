var accountBtn = document.querySelector('.account')
var menuBtn = document.getElementById('dropcheckbox')
var menulabel = document.getElementById('dropcheckbox_label')

var menuLogo = document.getElementById('dropcheckbox_label').firstElementChild; 

menuBtn.onchange = function() {
    if ( menuBtn.checked) {
        menuLogo.innerHTML = 'close';
    }
    else{
         menuLogo.innerHTML = 'menu';
    }
}
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

sr.reveal('.floatingimg', { delay:350, origin:'left'})
sr.reveal('.text', { delay:350, origin:'right'})
sr.reveal('.aboutus_pic', { delay:350, origin:'left'})
sr.reveal('.aboutus_text', { delay:350, origin:'top'})

// sr.reveal('.exploretitle', { delay:350, origin:'left'})
sr.reveal('.gridone', { delay:350, origin:'top'})
sr.reveal('.gridtwo', { delay:350, origin:'bottom'})
sr.reveal('.gridthree', { delay:350, origin:'top'})

sr.reveal('.mobileapp_pic', { delay:350, origin:'left'})
sr.reveal('.mobileapp_text', { delay:350, origin:'right'})

