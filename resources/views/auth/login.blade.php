<x-guest-layout>
  <!-- Inicio Sección Contenido Login -->
    @section('content')
    <div class="wrapper wrapper-full-page">
        <div class="full-page section-image" filter-color="black">
          <div class="content">
            <div class="container">
              <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                  @csrf
                  <!-- Inicio Login Card -->
                  <div class="card card-login">
                      <div class="card-header ">
                        <h3 class="header text-center">Ingeso de Usuario  CFPRO</h3>
                      </div>
                      <x-jet-validation-errors /> <!-- Mensaje de error en validación -->
                    <div class="card-body ">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="nc-icon nc-single-02"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo Electronico" id="email" name="email" :value="old('email')" required autofocus>
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="nc-icon nc-key-25"></i>
                          </span>
                        </div>
                        <input type="password" placeholder="Contraseña" class="form-control" name="password" required autocomplete="current-password">
                      </div>
                      <br />
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="" id="remember-me" name="remember">
                            <span class="form-check-sign"></span>
                            Recuerdame
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer ">
                      <a href="{{ route('login') }}">
                      <button type="submit" class="btn btn-warning btn-round btn-block mb-3">
                        Iniciar Sesión
                      </button> 
                      </a>
                    </div>
                    <!-- Fin Login Card -->
                  </div>
                </form>
                <a href="{{ route('register') }}">
                  <button type="submit" class="btn btn-primary btn-round btn-block mb-3">
                    Registrarse
                  </button>
                </a>
                <div>
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                      <p>Olvidaste tu contraseña</p>
                    </a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    @endsection
    
</x-guest-layout>
