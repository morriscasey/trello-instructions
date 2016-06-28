var newHash     = '',
   $mainContent = $('#content');

$('nav').delegate('a', 'click', function() {
	window.location.hash = $(this).attr('href');
	return false;
});

$(window).bind('hashchange', function() {
	newHash = window.location.hash.substr(1);
        console.log(newHash);
	$mainContent.load(newHash + " #content > *");
});