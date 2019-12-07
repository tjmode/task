<!DOCTYPE html>

<html>
<head>
	<title>register</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<link rel="stylesheet" href="css/css/scss1.css">
<link rel="stylesheet" href="css/css/scss.css">
<script src="register.js"></script>
<body id="b2">
<br>
<br>
<div class="container">
<div class="form-group">
<label >username</label>
<input type="text" class="form-control" id="username" placeholder="Enter username" required>
<small  class="form-text text-muted">Once you register with username you cant change it....</small>
</div>
<div class="form-group">
<label >Password</label>
<input type="password" class="form-control" id="password" placeholder="Password" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">date of birth</label>
<input type="text" class="form-control" id="date"  placeholder="Enter dob.." required>
<small  class="form-text text-muted">Enter with '/' example - 29/07/13</small>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="text" class="form-control" id="age"  placeholder="Enter age">
<small  class="form-text text-muted"></small>
</div>
<div class="form-group">
<label >number</label>
<input type="text" class="form-control" id="number"  placeholder="Enter number">
<small  class="form-text text-muted"></small>
</div>

    	
      <button type="submit" id="btn1">Submit</button>
    </div>
  </form>
</div>
<center><h1 class="para2" id="msg"></h1></center>
</body>
</html>