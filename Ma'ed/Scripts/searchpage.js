// Define an object to keep track of the state of each checkbox
var checkboxStates = {};
var count=0;
var selectedIngredientsNum=document.getElementById('ingredient-count');

// Get all the checkbox elements
var checkboxes = document.querySelectorAll('input[type="checkbox"]');

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
