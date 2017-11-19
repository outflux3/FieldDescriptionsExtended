

/**
 * Init for Processwire
 * These items could be added if fullscreen or sidebyside would work on PW
 * Note that fullscreen mode is not working right on Reno theme
 */
var initSimpleMDE = function() {
	var thisID = $(this).attr('id');
	var visible = $(this).is(":visible");

	console.log($(this));

	if(visible) {
		var simplemde = new SimpleMDE({
			element: document.getElementById(thisID),
			toolbar: ["bold", "italic", "heading", "|",
					  "quote", "unordered-list", "ordered-list", "|",
					  "link", "image", "|",
					  "preview", "side-by-side", "fullscreen", "|",
					  "table", "horizontal-rule", "code", "|",
					  "guide"
					  ],
			spellChecker: false,
			promptURLs: true,
		});
		$(this).data('simplemde', simplemde);
	}
}

/**
 * Init the field on page load
 */
$(window).load(function(){
	$('#Inputfield_description').each(initSimpleMDE);
});

$(document).on('wiretabclick reloaded opened', function() {
	$('#Inputfield_description').each(initSimpleMDE);
});


