<!DOCTYPE html>
<html>
<body>
<h1>Validação de dados com apenas números!!!</h1>
<p>Por favor coloque um número entre 1 e 10:</p>
<input id="numero">
<button type="button" onclick="myFunction()">Enviar</button>
<p id="demo"></p>
<script>
function myFunction(){
	var x, text;
	x = document.getElementById("numero").value;

	if(isNaN(x)|| x < 1 || x > 10){
		text = "Valor não valido, digite um número.";
	}else{
		text = "Valor válido";
	}
	document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>