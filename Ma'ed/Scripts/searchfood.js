const searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', performLiveSearch);// call performLiveSearch() when an element is entered
//searchInput.addEventListener('keyup', performLiveSearch);// call performLiveSearch() when an element is removed


function performLiveSearch() {

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
