	var $searchIcon = $('#search-icon');
	var $searchField = $('.search-field');

	$searchIcon.click(function(event){
		event.preventDefault();
    $searchField.show({duration:500});
    console.log('mic check..');
	});

  $searchField.click(function(event){
    event.preventDefault();
  });

	$searchField.focusout(function(event){
    event.preventDefault();
    $searchField.hide({duration:500});    
    console.log('one two..');
	});

