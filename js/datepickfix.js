jQuery(document).ready(function($) {
	(function() {
		var elem = document.createElement('input');
		elem.setAttribute('type', 'date');

		if ( elem.type === 'text' ) {
			$('.postform').datepicker({
				dateFormat: 'dd-mm-yy'
			});
		}

	})();
});