$(document).ready(function(){
			$('#login').click(function() {

		var username= document.getElementById("username").value;
		var password= document.getElementById("password").value;
		var data1 = {username:username,password:password}

		$.ajax(
		{
			type:"post",
			url:"log.php",
			data:data1,
			cache:false,
			success:function(response)
			{
				console.log(response);
				if (response == "yes")
				{
					window.location.replace('profile.php');
				}
				else{
					alert('worng');
				}

			}
		});
		return false;
	});
		});