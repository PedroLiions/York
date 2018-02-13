<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="York Telecom ou York Equipamentos é uma empresa de fabricação e revenda de equipamentos telecom, revendemos para todo o Brasil." name="description">
    <meta name=”keywords” content="York, York Telecom, YorkTelecom, Plaqueta, optica, plaqueta optica">
    <meta name="viewport" content="width=device-width, initial-scall=1.0" />
    {{-- favicon --}}
    <link rel="icon" href="img/favicon.png" />
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="css/app.css">
    {{-- FontAwesome --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>YorkTelecom &bull; @yield('title')</title>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light la-nav-bg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/yorktelecom-logo.svg" alt="YorkTelecom - Revenda de equipamentos Telecom" title="YorkTelecom - Fábrica e revenda de equipamentos de Telecom!" width="220px" height="77px" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active px-2"><a class="nav-link" href="">Home</a>
              <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Produtos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="produtos/">Rede Externa</a>
                  <a class="dropdown-item" href="produtos/">Rede Interna</a>
                  <a class="dropdown-item" href="produtos/">Ópticos</a>
                  <a class="dropdown-item" href="produtos/">Fábricação Própria</a>
                  <a class="dropdown-item" href="produtos/">FFTX</a>
                </div>
              </li>
              <li class="nav-item px-2"><a class="nav-link" href="#">Clientes</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#">Sobre</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    {{--  onde ficará o conteudo --}}
    @yield('body')

    <footer class="footer py-5 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="col-12">
              <img src="img/yorktelecom-logo-white.svg" width="220px" height="77px" alt="">
            </div>
            <div class="col-12">
              <p class="py-3">
              Nos, YorkTelecom somos uma empresa que fábrica e revende equipamentos telecom. Localizada em Caucaia do alto, Cotia. Revedemos para todo o Brasil.
              </p>
            </div>
          </div>

          {{-- Informacoes de contato --}}
          <div class="col-md-4">
            <h4 class="mb-4">Contato</h4>
            {{-- E-mail --}}
            <div class="media">
              <span class="fa fa-envelope mt-1 mr-4"></span>
              <div class="media-body">
                <p>contato@yorktelecom.com.br</p>
              </div>
            </div>
            {{-- telefone --}}
            <div class="media">
              <span class="fa fa-phone-square mt-1 mr-4"></span>
              <div class="media-body">
                <p>11 948656889</p>
              </div>
            </div>
            {{-- Localizacao --}}
            <div class="media">
              <span class="fa fa-map mt-1 mr-4"></span>
              <div class="media-body">
                <p>Estrada Caucaia do Alto.</p>
              </div>
            </div>
          </div> {{-- Fim informacoes de contato --}}

          <div class="col-md-4">
            <h4 class="mb-4">Receber promoções</h4>
            <form class="" action="index.html" method="post">
              {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="exemplo@exemplo.com">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Inscrever-se</button>
                </div>
              </div>
            </form>
          </div>

          {{-- Copy informacoes --}}
          <div class="col-12 text-center">
            &copy; Todos os direitos reservados <b>YorkTelecom ME.</b> {{ date('Y') }}. Desenvolvido Por <a target="_blank" href="http://www.facebook.com/pedrinholions">Pedro Lima</a>.
          </div>
        </div>
      </div>
    </footer>
  </body>
  {{-- javaScript bootstrap --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  {{-- links --}}
  @yield('links')
</html>
