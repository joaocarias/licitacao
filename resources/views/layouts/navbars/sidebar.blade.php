<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('Licitação App') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'atualize' || $activePage == 'licitacoes') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#submenulicitacoes" aria-expanded="false">
        <i class="material-icons">library_books</i>
          <p>{{ __('Licitação') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="submenulicitacoes">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'atualize' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('atualize') }}">
                <span class="sidebar-mini"> BD </span>
                <span class="sidebar-normal">{{ __('Atualizar Base de Dados') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'licitacoes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('licitacoes') }}">
                <span class="sidebar-mini"> EL </span>
                <span class="sidebar-normal"> {{ __('Exibir Licitações') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#submenuuser" aria-expanded="false">
        <i class="material-icons">person</i>
          <p>{{ __('Usuários') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="submenuuser">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> EU </span>
                <span class="sidebar-normal"> {{ __('Exibir Usuários') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
           <i class="material-icons">logout</i>{{ __('Sair') }}
        </a>
      </li>
      
    </ul>
  </div>
</div>