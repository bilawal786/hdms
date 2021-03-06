<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <span class="brand-text font-weight-light pl-4"><strong>HDMS CLIM</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(!empty(Auth::user()->image))
          <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('front/assets/images/logo/hdms.png')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
    @php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link {{ $link == route('home') ? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Tableau de bord
              </p>
            </a>
          </li>
            @if(Auth::user()->role == 1)

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            R??glages G??n??raux
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('general.settings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>R??glages G??n??raux </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.slider')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Curseurs </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.services')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nos services </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('general.content')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teneur </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('testimonial.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T??moignage </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('offers.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Nos offres </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gallery.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Galerie </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Requ??tes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('queries.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nouvelles requ??tes </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('queries.processing')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Traitement des devis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('queries.complete')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Devis complets</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Paiements
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('customers.payments')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Liens de paiement </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Les clients
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('customers.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tous les clients </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Parrainage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.sponsership')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Parrainages </p>
                            </a>
                        </li>
                    </ul>
                </li>

            @else

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Requ??tes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.queries')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mes Requ??tes </p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="nav-item">
                <a href="{{route('change.password')}}" class="nav-link">
                    <i class="nav-icon fas fa-key"></i>
                    <p>
                        Changer le mot de passe
                    </p>
                </a>
            </li>

           <li class="nav-item">
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                         class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
