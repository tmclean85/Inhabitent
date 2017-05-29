$(document).ready(function(){
  var $searchIcon = $('#search-icon');
  var $searchInput = $('.search-form');

  console.log('mic check');

  $searchIcon.click(function(event){
    event.preventDefault();  
    $searchInput.toggleClass('search-form-long');
  });

  $searchInput.focusout(function(){
     $searchInput.toggleClass('search-form-long');
  });

});