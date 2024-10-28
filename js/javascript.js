document.querySelector('button').addEventListener('click', function() {
    alert('Search functionality coming soon!');
});
$(document).ready(function() {
    $('.pagination a').on('click', function(e) {
      e.preventDefault();
      var pageNumber = $(this).text();
      // Call a function to load the next page of job listings
      loadJobListings(pageNumber);
    });
  });
  
  function loadJobListings(pageNumber) {
    // TO DO: implement the logic to load the next page of job listings
    // For demonstration purposes, just console.log the page number
    console.log('Loading page ' + pageNumber);
  }
  