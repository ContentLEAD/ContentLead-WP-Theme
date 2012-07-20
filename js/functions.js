// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	/* removes comments div (#social-tabs-comments) for social plugin, 
	   if there are no comments (Hack since :empty selector is not working!?!)
	 */
	if( !$.trim( $('#social-tabs-comments').html() ).length ) {
		$('#social-tabs-comments').remove();
	}

	/* Adds placeholders to "Social" comment form plugin
	 */
	if ( $('#author').length > 0 ) { 
    	$('#author').attr('placeholder', 'Your Name');
    }

    if ( $('#email').length > 0 ) { 
		$('#email').attr('placeholder', 'Your Email');
	}

	if ( $('#url').length > 0 ) { 
		$('#url').attr('placeholder', 'Your Website');
	}
	if ( $('#comment').length > 0 ) { 
		$('#comment').attr('placeholder', 'Your Comment');
	}

	if ( $('#comment').length > 0 ) { 
		$('#submit').attr('value', 'Comment');
	}

	/* Placeholder fix IE */
	if(!Modernizr.input.placeholder){

		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
		});

	}

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/