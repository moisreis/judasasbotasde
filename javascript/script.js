/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
// Select all images on the page
const images = document.querySelectorAll('img');

// Loop through each image and add the loading=lazy attribute
images.forEach((image) => {
	image.setAttribute('loading', 'lazy');
});

window.addEventListener('DOMContentLoaded', function () {
	// Get the scrolltotop button
	var scrolltotopButton = document.getElementById('scrolltotop');

	// Add a click event listener to the scrolltotop button
	scrolltotopButton.addEventListener('click', function () {
		// Scroll to the top of the page
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});
});
