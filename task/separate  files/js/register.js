$(document).ready(function(){
			$('#btn1').click(function() {

		var username= document.getElementById("username").value;
		var password= document.getElementById("password").value;
		var date= document.getElementById("date").value;
		var age= document.getElementById("age").value;
		var number= document.getElementById("number").value;
		var data = {username:username,password:password,date:date,age:age,number:number}


	$.ajax({
			type:"post",
			url:"reg1.php",
			data:data,
			cache:false,
			success:function(data1)

			{
				console.log(data1);
				if (data1 == "NO")
				{
					alert("username already taken");
				}
				else
				{$.ajax(
					{
				type:"post",
				url:"reg2.php",
				data:data,
				cache:false,
				success:function(html)
				{
					$('#msg').html(html);
				}

					}


					);
					
				}
			}
		});
		return false;
		});
			
		});