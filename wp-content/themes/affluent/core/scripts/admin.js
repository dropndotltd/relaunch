jQuery(document).ready(function(){
    
	/* SETTINGS MENU TABS */
	/* Menu Transitions */
	jQuery('.cpothemes-menu-item').click(function(event){
		var current_id = event.target.id;
		if(!jQuery('#' + current_id).hasClass('active')){
			jQuery('.cpothemes-block').fadeOut(300);
    		jQuery('#' + current_id + '_block').delay(500).fadeIn(300);
			jQuery('.cpothemes-menu-item').removeClass('active');
			jQuery('#' + current_id).addClass('active');
		}
    });
	/* Memorize Current Tab on Saves */
	jQuery('.cpothemes-menu-item').click(function(event){
		var current_id = jQuery(this).attr('id');
		jQuery('#cpotheme_custom_tab').val(current_id);
    });
	/* Save Settings */
	jQuery('.cpothemes-submit').click(function(event){
		jQuery('.cpothemes-submit').val('...');
    });
	
	
	/* COLOR PICKER FIELD */
	jQuery('.color').each(function(){
		current_object = jQuery(this);
		current_object.wpColorPicker({ defaultColor: current_object.val() });
	});
	
	
	/* UPLOAD FIELD */
	// When the Button is clicked...
    jQuery('.upload_button').click(function() {
        var text = jQuery(this).siblings('.upload_field');
 
        tb_show('Upload Image', 'media-upload.php?referer=cpotheme_settings&type=image&TB_iframe=true&post_id=0', false);
 
        window.send_to_editor = function(html){
            var src = jQuery('img', html).attr('src');
            text.attr('value', src).trigger('change');
            tb_remove();
        }
        return false;
    } );
	//Change image preview for the upload field
	jQuery('.upload_field').bind('change', function(){
		var url = this.value;
		var preview = jQuery(this).siblings('.upload_preview');
		jQuery(preview).attr('src', url);
	} );

	
	/* FONT FIELD */
	//Change text preview for the font field
	jQuery('.font_field').on('ready keyup change', function(event){ 
		var font = this.value;
		var font_file = jQuery(this).siblings('.font_file');
		var font_preview = jQuery(this).siblings('.font_preview');
		var font_name = font.split("+").join(" ");
		jQuery(font_file).html("<link href='http://fonts.googleapis.com/css?family=" + font + "' rel='stylesheet' type='text/css'>");
		jQuery(font_preview).css('font-family', '\'' + font_name.replace(':300', '') + '\'');
		jQuery(font_preview).css('font-weight', 'normal');
	});

	
	/* IMAGE LIST FIELD */
	//Change border color when selecting the image
    jQuery('.form_image_list_item img').click(function() {
        
        //Change other borders
        var parent = jQuery(this).parent().parent();
        jQuery(parent).find('img').each(function() {
            jQuery(this).removeClass('selected');
        });
        
        //Selected image
        jQuery(this).addClass('selected');        
    }); 	
});