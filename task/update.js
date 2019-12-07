$(document).ready(function(){
			$('#over').click(function() {
		var username= document.getElementById("username").value;
		var dob= document.getElementById("dob").value;
		var age= document.getElementById("age").value;
		var number= document.getElementById("number").value;
		var data = {username:username,dob:dob,age:age,number:number}

	$.ajax({
			type:"post",
			url:"updateplace.php",
			data:data,
			cache:false,
			success:function(html)
			{
				$('#msg').html(html);
			}
		});
		return false;
	});
		});