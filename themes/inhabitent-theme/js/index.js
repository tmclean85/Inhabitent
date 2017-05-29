$(document).ready(function (){
  var $searchIcon = $('#search-icon');
  var $searchInput = $('.search-form');

  $searchIcon.click(function(event){
    event.preventDefault();  
    $searchInput.toggleClass('search-form-long');
  });

  $searchInput.focusout(function(event){
     $searchInput.toggleClass('search-form-long');
  });

});