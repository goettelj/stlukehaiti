// A tiny plugin to swap default text (e.g. 'username') in text fields.
// By Cory Schires (http://coryschires.com)

(function($) {

	$.swap_value = {
		defaults: {
			normal_color: '#333333',
			default_color: '#B9B9B9'
		}		
	}

    $.fn.extend({
        swap_value: function() {
            
            var config = $.extend({}, $.swap_value.defaults, config);
            var swapValue = [];         
            
            return this.each(function(i) {
                var text_field = $(this); // cache this for selector performance
                
                text_field.css('color', config.default_color);
                
                swapValue[i] = text_field.val();
                text_field.focus(function(){
                    if (text_field.val() == swapValue[i]) {
                        text_field.val("");
                        text_field.css('color', config.normal_color);
                    }
                    text_field.addClass("focus");
                }).blur(function(){
                    if ($.trim(text_field.val()) == "") {
                        text_field.val(swapValue[i]);
                        text_field.removeClass("focus");
                        text_field.css('color', config.default_color);
                    }
                });
                
            })
        }
    })

})(jQuery);