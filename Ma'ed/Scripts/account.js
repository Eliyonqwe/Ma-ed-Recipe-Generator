var menuBtn = document.getElementById('dropcheckbox');
var menuLogo = document.getElementById('dropcheckbox_label').firstElementChild; 

$('#pic').click(function(){
    console.log('j');
      var profile=document.getElementById('profile');
      if(profile.style.width==='400px'){
        profile.style.width='0px';
      }
      else{
        profile.style.width='400px';
      }
  });
  menuBtn.onchange = function() {
    if ( menuBtn.checked) {
        menuLogo.innerHTML = 'close';
        
    }
    else{
         menuLogo.innerHTML = 'menu';
         }
  }