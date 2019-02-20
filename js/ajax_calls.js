function ajax_call(job) {
    (function($) {

    		event.preventDefault();

      $.ajax({
    		url: ajaxpagination.ajaxurl,
    		type: 'post',
    		data: {
    			action: 'ajax_pagination'
    		},
    		success: function( result ) {
    			alert( result );
    		}
    	})

    })(jQuery);
}
