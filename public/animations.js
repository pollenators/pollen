// Upon opening a page on the app, the sliding animation will be executed
window.onload(function() {
	$('#fullpage').fullpage({
		// Set options for scrolling
		autoScrolling:true,
		scrollHorizontally: true
	});
	// Disable scrolling
	$.fn.fullpage.setAllowScrolling(false);
});