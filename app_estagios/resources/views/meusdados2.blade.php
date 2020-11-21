<<<<<<< HEAD:laravel-7-web-template/resources/views/meusdados.html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestão de Estágios - Os Meus Dados</title>
        <link rel="stylesheet" href="../../../app_estagios/public/style.css/style.css">
        <link rel="stylesheet" href="../../../master.css">
    </head>
    <body>
    <div id="nav-body">

        <nav id="navbar">
            <ul id="navbar-menu">
              <li><a href="meusdados2.blade.php" class="active">Os Meus Dados</a></li>
              <li><a href="notificacoes.blade.php">Notificações</a></li>
              <li><a href="propostas_estagios.blade.php">Procurar Propostas de Estágio</a></li>
              <li class="nav-separator"></li>
              <li><a href="descricao_estagio.blade.php">Descrição do estágio</a></li>
              <li><a href="plano_atividades.blade.php">Plano de Atividades</a></li>
              <li><a href="../../../sumarios.html">Sumários</a></li>
              <li class="nav-separator"></li>
              <li><a href="">Terminar Sessão</a></li>
            </ul>
        </nav>
    </div>
        <div id="content">
=======
@extends("master")

@section("header-content")
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="master.css">
@endsection
>>>>>>> 36434aa679fc01d83e3feb80b221fa073763ebd7:app_estagios/resources/views/meusdados.blade.php

@section("sidemenu-options")
    <li><a href="meusdados2.blade.php" class="active">Os Meus Dados</a></li>
    <li><a href="notificacoes.blade.php">Notificações</a></li>
    <li><a href="propostas_estagios.blade.php">Procurar Propostas de Estágio</a></li>
    <li class="nav-separator"></li>
    <li><a href="descricao_estagio.blade.php">Descrição do estágio</a></li>
    <li><a href="plano_atividades.blade.php">Plano de Atividades</a></li>
    <li><a href="sumarios.html">Sumários</a></li>
    <li class="nav-separator"></li>
    <li><a href="">Terminar Sessão</a></li>
@endsection

@section("topbar-contents")
    <li>[NOME DO UTILIZADOR]</li>
    <li class="user-info-separator"> | </li>
    <li>[NOME DA ENTIDADE ACOLHEDORA]</li>
@endsection

@section("mainpage-contents")
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
                <p>Informações Básicas:</p><br>
                <ul class="button-spacing">
                  <li>Nome: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Nº de Aluno: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Ano: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                  <li>Curso: <span class="underlined-space">[NOME PLACEHOLDER]</span></li>
                </ul>
                <p>Contactos:</p><br>
                <table id="contacts-table">
                  <tr>
                    <td>
                      <div>
                        <p>Telemóvel:</p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <p>Telemóvel:</p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div>
                        <p>Telemóvel:</p>
                      </div>
                    </td>
                    <td>
                      <div>
                        <p>Lorem ipsum dolor sit amet</p>
                      </div>
                    </td>
                  </tr>
                </table>
                <a href="meusdados_form.blade.php" class="button edit-button">Alterar Dados</a>
              </div>
            </div>
@endsection