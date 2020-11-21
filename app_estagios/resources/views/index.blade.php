<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestão de Estágios - Os Meus Dados</title>
        <link rel="stylesheet" href="../../../app_estagios/public/style.css/style.css">
    </head>
    <body>
    <div id="nav-body">

        <nav id="navbar">
            <ul id="navbar-menu">
                <li><a href="index.blade.php" class="active">Os Meus Dados</a></li>
                <li><a href="notificacoes.blade.php">Notificações</a></li>
                <li><a href="propostas_estagios.blade.php">Procurar Propostas de Estágio</a></li>
                <li class="nav-separator"></li>
                <li><a href="">Descrição do estágio</a></li>
                <li><a href="">Plano de Atividades</a></li>
                <li><a href="">Sumários</a></li>
                <li class="nav-separator"></li>
                <li><a href="">Terminar Sessão</a></li>
            </ul>
        </nav>
    </div>
        <div id="content">

            <section id="user-info">
                <ul>
                    <li>[NOME DO UTILIZADOR]</li>
                    <li class="user-info-separator"> | </li>
                    <li>[NOME DA ENTIDADE ACOLHEDORA]</li>
                </ul>
            </section>

            <h1 id="page-title">Os Meus Dados</h1>

            <div class="info-section-container">
              <h2 class="sub-title">Informações do Estágio</h2>
              <div class="info-section">
                <ul>
                  <li>Entidade de Acolhimento: <span class="underlined-space">[NOME DA ENTIDADE]</span></li>
                  <li>Supervisor: <span class="underlined-space">[NOME DO SUPERVISOR]</span></li>
                  <li>Orientador: <span class="underlined-space">[NOME DO ORIENTADOR]</span></li>
                </ul>
              </div>
            </div>

            <div class="info-section-container">
              <h2 class="sub-title">Dados do Estagiário</h2>
              <div class="info-section">
                <ul class="button-spacing">
                  <li>Nome: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Nº de Aluno: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Ano: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Curso: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                </ul>
                <a href="" class="button edit-button">Alterar Dados</a>
              </div>
            </div>

        </div>


    </body>
</html>