!function($) {
	var postDefer = (new $.Deferred).resolve()
		, mostPreviousPost = 0
	;
	
	$(document)
		.on('change.sheet', 'form.sheet', _updateForm)
		.on('click.freefield', '[data-add-free-field]', _addFreeField)
	;
	
	/**
	 * Updates the form, providing no update is currently running. If it is, 
	 * waits for it to finish and then sends it, providing this was the last 
	 * time the update was called
	 */
	function _updateForm(event)
	{
		var $form = $(this)
			, sid = ++mostPreviousPost
		;
					
		postDefer.done(function() {
			if ( mostPreviousPost === sid ) {
				postDefer = $.post($form.attr('action'), $form.serialize());
			}
		});
	} // _updateForm();
	
	/**
	 * Adds a free field to the sheet
	 */
	function _addFreeField(event)
	{
		event.preventDefault();
		var $this = $(this)
			, type = $this.data('add-free-field')
			, $form = $this.closest('form')
			, name = prompt('What type of ' + type + ' would you like to add?')
			, controller = $form.attr('action').split('/')
			, sheet = controller[controller.length - 1]
		;
		
		controller = controller[controller.length - 4];
		$.post(
				($('base').attr('href') || '') + '/' + controller + '/add-free-field'
				, {type: type, name: name, sheet: sheet}
		).done(function() {
			location.reload();
		});		
		
	} // _addFreeField();
	
}(jQuery);