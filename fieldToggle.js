$(document).ready(function() {

	// Non-UIkit: toggle content visibility and swap open/close icons
	$(document).on('click', '.field-help-reveal[data-target]', function() {
		var $this = $(this);
		$($this.data('target')).fadeToggle('fast');
		$this.find('.fde-icon-open, .fde-icon-close').toggle();
		return false;
	});

	// UIkit: uk-toggle handles content; swap icons to reflect state
	$(document).on('click', '.field-help-reveal[data-uikit]', function() {
		$(this).find('.fde-icon-open, .fde-icon-close').toggle();
	});

});
