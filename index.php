<html>
<head><title>O meu form PHP</title>
<meta charset="utf-8" />
<link href="style.css" rel="stylesheet" />
</head>
<body>
<form name="meu_form" action="send1.php" method="post">
<h1>Entre em contacto</h1>
<ul>
<li><label for="name">Nome: </label>
<input type="text" size="50" name="name" id="name" />
</li>
<li><label for="email">Email: </label>
<input type="text" size="50" name="email" id="email" />
</li>
<li>
<label for="gen">Genero:</label>
<select id="gen" name="gen">
<option value="feminino"> Feminino </option>
<option value="masculino"> Masculino</option>
<option> 
</select>
</li>
<li><label for="msg">Mensagem: </label>
<textarea id="msg" name="msg" cols="42" rows="9"></textarea>
</li>
<li><input type="submit" onclick="Enviar();" value="Submeter" name="submit"/></li>
</ul>
</form>
</body>
</html>