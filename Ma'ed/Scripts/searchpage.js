// Define an object to keep track of the state of each checkbox
var checkboxStates = {};
var count=0;
var selectedIngredientsNum=document.getElementById('ingredient-count');
var menuBtn = document.getElementById('dropcheckbox');
var menuLogo = document.getElementById('dropcheckbox_label').firstElementChild; 


// Get all the checkbox elements
var checkboxes = document.querySelectorAll('input[type="checkbox"]');
var moreBtn = document.getElementsByClassName('moreBtn');

// Add event listeners to each checkbox
for (var i = 0; i < checkboxes.length; i++) {
  var checkbox = checkboxes[i];
  
  // Set the initial state of the checkbox
  checkboxStates[checkbox.id] = checkbox.checked;
  
  // Add an event listener to the checkbox
  checkbox.addEventListener('change', function() {
    checkboxStates[this.id] = this.checked;
     (this.checked ? count++ : count--);
     console.log(count);
     selectedIngredientsNum.textContent=`You have selected ${count} ingredients`;
    console.log(this.id + ' is now ' + (this.checked ? 'selected' : 'unselected'));
  });
}
// var resultDiv = document.getElementsByClassName('search_results').getElementsByTagName("div");

// for(var i=0; i<resultDiv.length; i++) {
//      resultDiv[i].text(childNodes.text().substring(0,20) + '<a href="">Read more</a>');
   
// }

$('#pantry_searchbtn').click(function() {
    var searchText = document.getElementById('pantry_search').value.toLowerCase();
    console.log(searchText);
  
    // Find the label with the matching 'for' attribute
    var targetLabel = $('label[for="' + searchText + '"]');
    
  
    // Scroll to the target label if found
    if (targetLabel.length > 0) {
    
      $(document).ready(function() {
        $('body, .collection').animate({
          scrollTop: targetLabel.offset().top-230 //to scroll to position of the search
        }, 500);
      });
      
    } else {
      console.log('Label not found.');
    }
});

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

// var currentFoodID = null;
// moreBtn.addEventListener("click", actionfn);

// function actionfn(){
//   currentFoodID=moreBtn.getAttribute('id');
// }