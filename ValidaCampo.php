<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function validateForm(){
		var x = document.forms["myForm"]["fname"].value;
		
		if(x == null || x == "") {
			alert("Por favor preencha o campo nome.");
			return false;
		}
		var y = document.forms["myForm"]["fsenha"].value;
		if(y == null || y == ""){
			alert("Por favor preencha o campo senha.");
			return false;
		}
	}
</script>
</head>
<body>
<form name="myForm" action="form1.php" onsubmit="return validateForm()" method="post">
Name:<input type="text" name="fname"></br> </br>
Senha:<input type="password" name="fsenha"></br> </br>
<input type="submit" value="Login"></input>
</form>
</body>
</html>