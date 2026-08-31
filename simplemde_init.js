

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
		// Start at the height the textarea asked for.
		//
		// ProcessField renders the description field with rows="3", but the
		// editor library sets min-height 300px inline on its scroller and
		// ignores the attribute entirely, so a three-row description got a
		// 300px box. Measured from CodeMirror's own line height rather than a
		// hardcoded number, and only once the editor exists, because a hidden
		// editor cannot be measured — which is safe here, since this only runs
		// on a visible textarea.
		//
		// InputfieldSimpleMDE does the same for the fields it creates, but this
		// editor is constructed directly against the library, so it does not
		// inherit that. The 300px growth cap still applies from that module's
		// CSS; this only changes where the editor starts.
		var rows = parseInt($(this).attr('rows'), 10);
		var lineHeight = simplemde.codemirror.defaultTextHeight();
		if(rows > 0 && lineHeight > 2) {
			simplemde.codemirror.getScrollerElement().style.minHeight = Math.round(rows * lineHeight) + 'px';
			simplemde.codemirror.refresh();
		}

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


