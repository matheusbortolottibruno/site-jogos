<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form method="post" action="salvar-cliente.php">
        Nome:<input name="nome"><br>
        E-mail:<input type="email" name="email"><br>
        Telefone:<input type="tel" name="telefone"><br>
        Rua, 
        numero, 
        bairro, 
        complemento, 
        cidade, 
        estado,
        <select name="estado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
        </select>
        data de nascimento,
        cpf, 
        rg, 
        whatsapp, 
        <br>
        fuma 
        <input type="radio" name="fuma" value="sim">Sim
        <input type="radio" name="fuma" value="não">Não
        <br>
        bebida(álcool)
        <button type="submit">Salvar cadastro</button>
    </form>
</body>
</html>