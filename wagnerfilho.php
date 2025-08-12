<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] != 'wagnerfilho') {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#fff">
    <title>Jose Wagner Q.F. :: D'QUEIROZ</title>
    <link rel="stylesheet" href="usuarios.css">
    <link rel="icon" type="image/x-icon" href="logo.ico">
</head>

<body>
    <div class="top-bar">
        <img src="logo.png" alt="Logo" class="logo-bar">
        <h1>Jose Wagner de Queiroz Filho</h1>
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
                    <td>01/02/2025</td>
                    <td><a href="Cálculos Atualizados.pdf" target="_blank">Acessar</a></td>
                </tr>
                <tr>
                    <td>Comprovantes</td>
                    <td>03/04/2025</td>
                    <td><a href="Comprovantes.pdf" target="_blank">Acessar</a></td>
                </tr>
                <tr>
                    <td>Documentos</td>
                    <td>05/06/2025</td>
                    <td><a href="Documentos.pdf" target="_blank">Acessar</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2025 D'QUEIROZ ADVOCACIA E ASSESSORIA. Todos os direitos reservados.</p>
        <p>Desenvolvido por <a href="https://instagram.com/eusougeovani">GEOCODE Programmer</a></p>
    </footer>
</body>

</html>