<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'elisangela') {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elisângela A.Q. :: D'QUEIROZ</title>
    <link rel="stylesheet" href="usuarios.css">
</head>

<body>

    <div class="top-bar">
        <img src="logo.png" alt="Logo" class="logo-bar">
        <h1>Elisângela Amaral de Queiróz</h1>
        <a href="logout.php" class="logout-btn">Sair</a>
    </div>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Nome do Arquivo</th>
                    <th>Data de Upload</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cálculos Atualizados</td>
                    <td>01/03/2023</td>
                    <td><a href="arquivos/calculos_atualizados.pdf" target="_blank">Acessar</a></td>
                </tr>
                <tr>
                    <td>Comprovantes</td>
                    <td>01/03/2023</td>
                    <td><a href="arquivos/comprovantes.xlsx" target="_blank">Acessar</a></td>
                </tr>
                <tr>
                    <td>Documentos</td>
                    <td>01/03/2023</td>
                    <td><a href="arquivos/documentos.zip" target="_blank">Acessar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2025 Geovani Santos. Todos os direitos reservados.</p>
        <p>Desenvolvido por <a href="https://instagram.com/eusougeovani">Geovani Santos</a></p>
    </footer>

</body>

</html>