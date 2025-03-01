<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="processa_formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="SP">São Paulo</option>
            <option value="MG">Minas Gerais</option>
            <option value="BA">Bahia</option>
        </select><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
