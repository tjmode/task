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
			success:function(data1)
			{
				console.log(data1);
				if (data1 == username){
					window.location.href= 'update.php';
				}

			}
		});
		return false;
	




		});
		});