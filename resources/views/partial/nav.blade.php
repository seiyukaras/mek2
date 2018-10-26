<nav class="navbar navbar-expand-lg fixed-top bg-dark" style="height: 35px; font-size: 12px;">
    <div class="container">
        <!--div class="navbar-translate">
            <button class="navbar-toggler" type="button" data-toggle="#contact" data-target="#contact" aria-controls="contact" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div-->
        <div class="navbar-collapse justify-content-center" id="contact">
            <ul class="navbar-nav ml-auto" style="position:fixed;">
                <li class="nav-item">
                    <a class="nav-link" href="#0"><i class="material-icons">location_on</i> Calle Enramadas S/N esq. Paseo Alameda. </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#0"><i class="material-icons">phone</i> (+53) 22669336</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#0"><i class="material-icons">email</i> contacto@mekacuba.com</a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Me gusta en Facebook">
                    <a class="nav-link" href="#0"><i class="fa fa-facebook"> </i></a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Me gusta en Twitter">
                    <a class="nav-link" href="#0"><i class="fa fa-twitter"> </i></a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Me gusta en Instagram">
                    <a class="nav-link" href="#0"><i class="fa fa-instagram"> </i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-default fixed-top navbar-expand-lg"  color-on-scroll="100"  id="sectionsNav" style="top: 35px;">

    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand">
                <div class="logo-big">
                    <img src="/img/logo-big.png" class="img-fluid">
                </div>
                <div class="logo-small">
                    <img src="/img/logo-small.png" class="img-fluid">
                </div>
            </a>
                  
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                  <a href="{{ route('home') }}" class="{{ Request::path() == '/' ? 'btn btn-rose btn-raised btn-round' : 'nav-link'}}">
                      <i class="material-icons">home</i> Principal
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/reservation" class="{{ Request::path() == 'reservation' ? 'btn btn-rose btn-raised btn-round' : 'nav-link'}}">
                      <i class="material-icons">restaurant</i> Reservar
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/blog" class="nav-link">
                      <i class="material-icons">comment</i> Blogs
                  </a>
                </li>

                @auth
                    <li class="nav-item">
                      <a href="{{ route('listBlog') }}" class="nav-link">
                          <i class="material-icons">add_comment</i> Crear Blog
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('listReserva') }}" class="{{(Request::path() == 'listReserva' || Request::route()->getName() == 'cancelarReserva') ? 'btn btn-rose btn-raised btn-round' : 'nav-link'}}">
                          <i class="material-icons">assignment</i> Reservaciones
                      </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                          <i class="material-icons">person</i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                          <a href="#" class="dropdown-item" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                              <i class="material-icons">power_settings_new</i> Salir
                          </a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                        <li class="nav-item">
                          <a href="{{ route('login') }}" class="nav-link">
                          <i class="material-icons">lock</i> Entrar
                          </a>
                        </li>
                    @endauth
            </ul>
        </div>
    </div>
</nav>