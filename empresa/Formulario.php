<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Processar.php" method="POST">
        <div>
            <label for="txtNome">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" value="Joao">
        </div>
        <div>
            <label for="txtCPF">CPF:</label>
            <input type="text" name="txtCPF" id="txtCpf" value="11111111111">
        </div>
        <div>
            <label for="txtCargo">Cargo:</label>
            <input type="text" name="txtCargo" id="txtCargo" value="Operador">
        </div>
        <div>
            <label for="txtDepartamento">Departamento:</label>
            <input type="text" name="txtDepartamento" id="txtDepartamento" value="Coordenação">
        </div>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar Form</button>
    </form>

    <a href="Processar.php">Listar Funcionários</a>
</body>
</html>