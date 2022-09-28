
<html lang="en" dir="ltr">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="arquivo.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="d-flex w-100  ">
      <h1></h1>
      <nav class="d-flex w-100 navbar navbar-expand-lg bg-success">
        <div class="container">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="navbar-brand" href="{{ route('menu.index')}}">cardápios</a>
                </li>
                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="">dados da empresa</a>
                </li>
                <li class="nav-brand">
                  <a class="nav-link active" href="{{ route('user.index')}}">funcionarios</a>
                </li>
                <li class="nav-brand">
                  <a class="nav-link active" href="{{ route('product.index')}}">produtos</a>
                </li>
                <li class="nav-brand">
                  <a class="nav-link active" href="#">cardápio publico</a>
                </li>

                  <li class="nav-brand dropdown">
                    @guest
                      @if (Route::has('login'))
                        <li class="nav-item">
                          <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                      </li>
                      <li><a class="dropdown-item" href="#"></a>
                        @if (Route::has('register'))
                        <li class="nav-item">
                          <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                          </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    sair
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                  </li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
@yield ('content')

  </body>
</html>
