$(function(){
	$('.menuPage').on('click',function(){


			$.ajax({

			  url: '/menu',

			  method:'get',

			  success: function(response) {

			  		$('#main-container').empty();
			  		$('#main-container').html(response);

			  },

			  error:function(error) {
			  		console.log(error);
			  }

			});

	});
})
