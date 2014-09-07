
	jQuery(document).ready(function($) {

		    //$('#nav-main').scrollspy()
		    
		    // Localscrolling 
    		$('#nav-main, .brand').localScroll();
     		$('#news, .container').localScroll();

     		$('#submitButton').on('click', function(event) {
     			document.getElementById('submitButton').value = "Submitted!";
     		});

	});
	
	

