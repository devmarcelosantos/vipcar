<!DOCTYPE html>
<html class="ls-theme-green">
  <head>
    <title>VIP CAR</title>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="http://assets.locaweb.com.br/locastyle/3.10.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
  </head>
  <body>
    <div class="ls-topbar ">

  <!-- Barra de Notificações -->
  <div class="ls-notification-topbar">

    <!-- Links de apoio -->
    <div class="ls-alerts-list">
      <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
    </div>

    <!-- Dropdown com detalhes da conta de usuário -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <span class="ls-name">{{ Auth::user()->name }}</span>
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Meus dados</a></li>
          <li><a href="#">Faturas</a></li>
          <li><a href="#">Planos</a></li>
          <li><a href="{{ route('logout') }}">Sair</a></li>
         </ul>
      </nav>
    </div>
  </div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="{{ route('home') }}"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="home" class="ls-ico-hours">
        <small>HIGIENE E ESTETICA AUTOMOTIVA</small>
        VIP CAR
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>


    <aside class="ls-sidebar">

  <div class="ls-sidebar-inner">
      <a href="/locawebstyle/documentacao/exemplos//pre-painel"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>
           <li><a href="/" class="ls-ico-home" title="Pagina Inicial">Pagina Inicial</a></li>
           <li>
           <a href="#" class="ls-ico-users" title="Clientes">Clientes</a>
            <ul>
              <li><a href="{{ route('client.add') }}">Cadastrar</a></li>
              <li><a href="{{ route('clients') }}">Buscar</a></li>
              <li><a href="/client/edit">Editar</a></li>
            </ul>
            </li>
            <li>
              <a href="#" class="ls-ico-dashboard" title="Veiculo">Veiculo</a>
              <ul>
                <li><a href="/vehicle/add">Cadastrar</a></li>
                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Buscar</a></li>
                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">Editar</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="ls-ico-panel-backup" title="Servicos">Serviços</a>
              <ul>
                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-domain">Cadastrar</a></li>
                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-aspect">Buscar</a></li>
                <li><a href="/locawebstyle/documentacao/exemplos/painel1/config-email">Editar</a></li>
              </ul>
            </li>
        </ul>
      </nav>
  </div>
</aside>

    <main class="ls-main ">
      <div class="container-fluid">
        

        	@yield('content')

      </div>
    </main>

    <aside class="ls-notification">
      <nav class="ls-notification-list" id="ls-notification-curtain" style="left: 1716px;">
        <h3 class="ls-title-2">Notificações</h3>
        <ul>
          <li class="ls-dismissable">
            <a href="#">Blanditiis est est dolorem iure voluptatem eos deleniti repellat et laborum consequatur</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Similique eos rerum perferendis voluptatibus</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Qui numquam iusto suscipit nisi qui unde</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Nisi aut assumenda dignissimos qui ea in deserunt quo deleniti dolorum quo et consequatur</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
          <li class="ls-dismissable">
            <a href="#">Sunt consequuntur aut aut a molestiae veritatis assumenda voluptas nam placeat eius ad</a>
            <a href="#" data-ls-module="dismiss" class="ls-ico-close ls-close-notification"></a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
