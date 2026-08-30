

/**
 * Init for Processwire
 * These items could be added if fullscreen or sidebyside would work on PW
 * Note that fullscreen mode is not working right on Reno theme
 */
var initSimpleMDE = function() {
	var thisID = $(this).attr('id');
	var visible = $(this).is(":visible");

	//console.log($(this));

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
			// Never fetch FontAwesome from a third-party CDN. The editor library
			// only recognises FontAwesome served from maxcdn.bootstrapcdn.com,
			// so the admin's own local copy never satisfies its check and it
			// appends a <link> to that CDN on every field-edit screen. This
			// editor is constructed directly rather than through
			// InputfieldSimpleMDE, so that module's default does not apply here.
			autoDownloadFontAwesome: false,
		});
		$(this).data('simplemde', simplemde);
	}
}

/**
 * Init the field on page load
 */
$(window).on('load', function(){
	$('#Inputfield_description').each(initSimpleMDE);
});

$(document).on('wiretabclick reloaded opened', function() {
	$('#Inputfield_description').each(initSimpleMDE);
});


