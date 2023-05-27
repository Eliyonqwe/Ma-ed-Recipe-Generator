// Define an object to keep track of the state of each checkbox
var checkboxStates = {};
var count = 0;
var selectedIngredientsNum = document.getElementById('ingredient-count');
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
  checkbox.addEventListener('change', function () {
    checkboxStates[this.id] = this.checked;
    (this.checked ? count++ : count--);
    console.log(count);
    selectedIngredientsNum.textContent = `You have selected ${count} ingredients`;
    console.log(this.id + ' is now ' + (this.checked ? 'selected' : 'unselected'));
  });
}
// var resultDiv = document.getElementsByClassName('search_results').getElementsByTagName("div");

// for(var i=0; i<resultDiv.length; i++) {
//      resultDiv[i].text(childNodes.text().substring(0,20) + '<a href="">Read more</a>');

// }

$('#pantry_searchbtn').click(function () {
  var searchText = document.getElementById('pantry_search').value.toLowerCase();
  console.log(searchText);
  // var CapitalsearchText = searchText.charAt(0).toUpperCase() + searchText.slice(1).toLowerCase();
  // var SmallsearchText = searchText.charAt(0).toLowerCase() + searchText.slice(1).toLowerCase();

  // Find the label with the matching 'for' attribute
  var targetLabel1 = $('label[id="' + searchText + '"]');
  //var targetLabel2 = $('label[for="' + SmallsearchText + '"]');


  // Scroll to the target label if found
  if (targetLabel1.length > 0) {

    $(document).ready(function () {
      $('body, .collection').animate({
        scrollTop: targetLabel1.offset().top - 230 //to scroll to position of the search
      }, 500);
    });

  }
  // else if (targetLabel2.length > 0) {

  //   $(document).ready(function () {
  //     $('body, .collection').animate({
  //       scrollTop: targetLabel2.offset().top - 230 //to scroll to position of the search
  //     }, 500);
  //   });

  // }
  else {
    console.log('Label not found.');
  }
});

$('#pic').click(function () {
  console.log('j');
  var profile = document.getElementById('profile');
  if (profile.style.width === '400px') {
    profile.style.width = '0px';
  }
  else {
    profile.style.width = '400px';
  }
});
menuBtn.onchange = function () {
  if (menuBtn.checked) {
    menuLogo.innerHTML = 'close';

  }
  else {
    menuLogo.innerHTML = 'menu';
  }
}

const searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', performLiveSearch);// call performLiveSearch() when an element is entered
searchInput.addEventListener('keyup', performLiveSearch);// call performLiveSearch() when an element is removed


function performLiveSearch() {
  console.log("hello");
  const query = searchInput.value;
 var SmallsearchText = query.toLowerCase();//to lower text for search purposes

  if (query.length > 0) {
    const results = document.querySelectorAll('.result');
    results.forEach((result) => {
      if (result.id.includes(SmallsearchText) ) {
        result.style.display = 'block';
      } else {
        result.style.display = 'none';
      }
    });
  }
  else {
    // If the query is empty, show all results
    const results = document.querySelectorAll('.result');
    results.forEach((result) => {
      result.style.display = 'block';
    });
  }

};


// var currentFoodID = null;
// moreBtn.addEventListener("click", actionfn);

// function actionfn(){
//   currentFoodID=moreBtn.getAttribute('id');
// }