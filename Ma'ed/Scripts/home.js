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

const sr = ScrollReveal({
    distance : '45px',
    duration : 2700,
    reset : true, 
})

sr.reveal('.floatingimg', { delay:350, origin:'left'})
sr.reveal('.text', { delay:350, origin:'right'})