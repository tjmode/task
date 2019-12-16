<!DOCTYPE html> 
<html>
<head>
	<title></title>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<script type="text/javascript">
		function login() {

		var username =document.getElementById("username").value;
		var password=document.getElementById("password").value;
		var data1 ='username='+username;

		$.ajax(
		{
			type:"post",
			url:"log.php",
			data:data1,
			cache:false,
			success:function(html)
			{
				$('#msg').html(html);
			}
	
		});
		return false;
	}
</script>
<body>
<form>
	
	<input type="text" id="username" name="">
	<input type="password" id="password" name="">
	<button onclick="return login()"></button>
</form>
<p id="msg"></p>
</body>
</html>