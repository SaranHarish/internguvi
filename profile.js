$(document).ready(function(){
			$('#update').click(function() {
			var username =document.getElementById("username").value;
			var sdata={username:username}
	$.ajax(
		{
			type:"post",
			url:"change.php",
			data:sdata,
			cache:false,
			success:function(response)
			{
				console.log(response);
				if(response == username){
				window.location.href('update.php');
				}
			}
		});
		return false;
		});
		});
