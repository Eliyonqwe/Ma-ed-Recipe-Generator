$('#pantry_searchbtn').click(function() {
    var searchText = document.getElementById('pantry_search').value.toLowerCase();
    console.log(searchText);
  
    // Find the label with the matching 'id' attribute
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
