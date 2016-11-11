$(document).ready(function(){
	$('#contact-form').on('submit',function(e){
		var data = $(this).serialize();
		$.ajax({
			url: 'handle.php',
			type: 'POST',
			data: data,
			cache: false,
			success: function(result)
			{
				console.log(data);
				swal("Success!","Message sent!" , 'success');
			},

			error:function(result)
			{
				swal("Oops...", "Something went wrong :(", "error");
			}
		});
		e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
	});
});	