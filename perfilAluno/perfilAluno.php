<?php
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background">
        <img class="foto" src="img/fundo3.jpg" alt="Imagem de fundo">
    </div>
    <div class="container">
        <div class="sidebar">
            <h2>Perfil de Aluno</h2>
            <ul>
                <li><a href="boletos.html">Boletos</a></li>
                <li><a href="Notificacoes.html">Notificações</a></li>
            </ul>
            <a href="../principal/principal.html"><img src="img/lg.png" alt="Logo da Finanfitness" class="logo"></a>
        </div>
        <div class="content">
            <div id="mensalidade" class="tab-content">
                <h3>Mensalidade</h3>
                <p>Informações sobre a mensalidade do aluno.</p>
            </div>
            <div id="notificacoes.html" class="tab-content">
                <h3>Notificações</h3>
                <p>Aqui estão as notificações relacionadas ao aluno.</p>
            </div>
        </div>
    </div>

    <script>
        function mostrarAba(aba) {
            // Função para exibir as abas de conteúdo
            const abas = document.querySelectorAll('.tab-content');
            abas.forEach(aba => aba.style.display = 'none');
            document.getElementById(aba).style.display = 'block';
        }
    </script>
</body>

</html>