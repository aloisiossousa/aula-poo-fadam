<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Teste</title>
</head>
<body>
<div class="nav">
    <h1>Digite os dados</h1>
</div>

<form class="form" method="post" action="criar_pessoa.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br>

    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <input type="submit" value="Criar Pessoa">
</form>

</body>
</html>