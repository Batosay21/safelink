<?php
// REDIRECIONAMENTO FORTE PARA HTTPS - COLOCAR NO TOPO ABSOLUTO
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    $redirect_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect_url);
    exit();
}

session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Se não estiver logado, redirecionar para a página de login
    header('Location: logi.php?message=' . urlencode('Acesso restrito! Faça login.') . '&type=error');
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sobre sua Privacidade </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../SafeLinks_Favicon_Logo.png">

    <!-- <link rel="stylesheet" href="perfil.css"> -->
    <link rel="stylesheet" href="sobrePrivacidade.css">
    <link rel="stylesheet" href="index_php.css">
    <link rel="stylesheet" href="../navBarStyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <!-- Incluir estilos específicos de favoritos e histórico -->
    <!-- <link rel="stylesheet" href="favoritosStyle.css">
    <link rel="stylesheet" href="historicoStyle.css"> -->
</head>
<body style="background-repeat: repeat;">

  <!-- NAVBAR -->
    <nav class="navBarElemento" id="navBarElementoId">
        <div class="navBarContainer">
        <div class="navBarLogo" id="navBarLogoId"><a href="index.php"> SafeLinks </a></div>
        <ul class="navBarLinks" id="navBarLinksId">
            <li class="user-menu">
            <button class="user-menu-button" >
                <a href="perfil.php" ><i class="fas fa-user"></i> <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?> </a>
            </button>
            </li>
            <!-- <li><a href="#"><i class="fa fa-bell" id="notificacoesIcone"></i> Notificações </a></li> -->
            <li><a href="sobre.php"><i class="fa-solid fa-circle-info"></i> Sobre </a></li>
            <li><a href="dicas.php"><i class="fas fa-lightbulb"></i> Dicas </a></li> <!-- NOVO BOTÃO DICAS -->
            <li> 
            <a href="logout.php" class="sair-link">
                <i class="fas fa-sign-out-alt"></i> Deslogar
            </a>
            </li>
            <li class="modoEscuroClaroElemento" id="modoEscuroClaroElementoId">
            <a><i class="fas fa-moon"></i> Modo </a>
            </li>
        </ul>
        <div class="menuHamburguerElemento" id="menuHamburguerElementoId"> 
            <i class="fas fa-bars"></i> 
        </div>
        </div>
    </nav>


    <div class="sobrePrivacidadeDiv" id="sobrePrivacidadeDivId">
        <h3> <b> SOBRE PRIVACIDADE </b> </h3>
        <p>
            A sua privacidade é uma prioridade para nós. No SafeLinks, trabalhamos para oferecer um ambiente seguro, transparente e confiável para que você possa navegar, armazenar e gerenciar seus links sem preocupações. Esta página descreve como tratamos suas informações, quais dados coletamos e de que forma eles são utilizados internamente.
        </p>
            <br>
            <div class="pseudoBreak"></div>
        <p>   
            <u> <b> 1. </b> Coleta de Informações: </u>
            Coletamos apenas os dados necessários para garantir o funcionamento adequado da plataforma — como seu nome, e-mail e credenciais de acesso. Informações relacionadas aos links que você salva, favoritos ou histórico também podem ser armazenadas, sempre de forma segura e exclusivamente para melhorar sua experiência no uso do serviço.
        </p> 
            <br>
            <div class="pseudoBreak"></div>
        <p>  
            <u> <b> 2. </b> Uso dos Dados: </u>
            Os dados coletados têm como finalidade aprimorar funcionalidades, personalizar o uso do sistema e permitir que o SafeLinks ofereça recomendações, organização inteligente de links e recursos adicionais que dependem do histórico do usuário. Em hipótese alguma compartilhamos suas informações com terceiros sem o seu consentimento.
        </p>
            <br>
            <div class="pseudoBreak"></div>
        <p>
            <u> <b> 3. </b> Segurança e Proteção: </u>
            Aplicamos boas práticas de segurança para manter seus dados protegidos, incluindo comunicação criptografada via HTTPS, verificação de sessões e mecanismos de prevenção contra acessos não autorizados. Nosso objetivo é garantir que somente você tenha controle total sobre sua conta e seu conteúdo.
        </p>   
            <br>
            <div class="pseudoBreak"></div>
        <p>
            <u> <b> 4. </b> Transparência e Controle do Usuário: </u>
            Você pode, a qualquer momento, realizar alterações nos seus dados de perfil, excluir links armazenados ou encerrar sua conta. Caso deseje solicitar informações adicionais sobre o tratamento dos seus dados, estamos à disposição para esclarecimentos.
        </p>
            <br>
            <div class="pseudoBreak"></div>
        <p>
            <u> <b> 5. </b> Atualizações desta Política: </u>
            Esta Política de Privacidade pode ser atualizada periodicamente para refletir novas funcionalidades, requisitos legais ou melhorias de segurança. Sempre que uma alteração relevante ocorrer, você será notificado dentro da própria plataforma.
        </p>
            <br>
            <div class="pseudoBreak"></div>
        <p>     
            O SafeLinks existe para oferecer uma experiência digital mais segura e organizada — e isso só é possível respeitando sua privacidade. Obrigado por confiar em nossa plataforma.
        </p>
    </div>


    <div class="redesDeContatoElemento" id="redesDeContatoElementoId" style="position: relative; bottom: -50px;">
    <ul class="redesDeContatoElementoUl">
      <div id="redesDeContatoCopyright">
          <i class="fa-solid fa-copyright" id="copyrightIcone"></i> 
          <u> Copyright 2025 SafeLinks </u>
      </div>
      <div>
        <a href="https://www.youtube.com/@safeLink-s7j" target="blank"><li><i class="fa-brands fa-youtube"></i></li> YouTube </a>
        <a href="https://web.facebook.com/profile.php?id=61582107901762" target="blank"><li> <i class="fa-brands fa-square-facebook"></i></li> Facebook </a>
        <a href="https://www.instagram.com/safelin297/" target="blank"> <li><i class="fa-brands fa-instagram"></i></li> Instagram </a>
      </div>
    </ul>
  </div>

  

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="perfil.js"></script> -->
    <script src="../script.js"></script>
    <script src="../theme.js"></script>
    <!-- <script src="favoritosScript.js"></script> -->
    <!-- <script type="module" src="historicoScript.js" ></script> -->
    <!-- <script src="perfilDados.js"></script> -->
</body>
</html>