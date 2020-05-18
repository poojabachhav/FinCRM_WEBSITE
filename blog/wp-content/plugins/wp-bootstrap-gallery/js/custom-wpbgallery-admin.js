jQuery(document).ready(function($){
	jQuery('input[name^=updatetitle]').click(function(){
		var parentLi = jQuery(this).closest('li');
	    var curpostid=parentLi.find('input[name^=wpbgallery_thumb]').val();
    	var curtitle=parentLi.find('input[name^=imgtitle]').val();

    	if(curtitle=='')
    	{
    		alert("Enter the Title.");
    		parentLi.find('input[name^=imgtitle]').focus();
    	}
    	else
    	{
    		var selected = $(this);
		    selected.parent('li').find('span.updatespinner').removeClass('hide');
		    selected.parent('li').find('span.updatespinner').addClass('show');
    		jQuery.post(
		        ajaxurl,
		        {
		            'action': 'wpbgallery_update_imagetitle',
		            'id':      curpostid,
		            'data':    curtitle
		        },
		        function(response){
		        	selected.parent('li').find('span.updatespinner').removeClass('show');
		        	selected.parent('li').find('span.updatespinner').addClass('hide');
		        }
    		);
        }

    });

});