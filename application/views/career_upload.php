<div class="container text-center">
	<form class="form" id="form_upload" method="post" enctype="multipart/form-data" action="<?php echo base_url('home/fileUpload'); ?>" >
                                                
    	<input type="text" class="form-control" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" >

    	<input type="text" class="form-control" name="name" value="name" >
    	<input type="file" class="form-control" name="file" value="file" >
    	<input type="submit" class="button" id="btn_submit" name="btn_submit"  >

    </form>
</div>

<script>
	
	$("form").submit( function(event){
	// $("#btn_submit").click( function(event){

	 	event.preventDefault();

	    var form_data  = $(this);
	    form_data      = new FormData(form_data[0]);  
        console.log(form_data);

     	$.ajax({
	        url     : '<?php echo base_url(); ?>home/uploads',
	        type    : 'POST',
	        dataType: "JSON",
	        data    : form_data,
	        processData: false, 
	        contentType: false,
	        success : function(response) {
	        	console.log(response);
	        },
	    });

	    // return false;


	});
</script>