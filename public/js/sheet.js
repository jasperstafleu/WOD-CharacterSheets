!function($) {
	var defer = (new $.Deferred).resolve()
		, mostPrevious = 0
	;
	
	$(document).on('change.sheet', 'form.sheet', function(event) {
		var $form = $(this)
			, sid = ++mostPrevious
		;
					
		defer.done(function() {
			if ( mostPrevious === sid ) {
				defer = $.post($form.attr('action'), $form.serialize());
			}
		});
	});
	
}(jQuery);