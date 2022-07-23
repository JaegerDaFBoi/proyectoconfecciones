<x-guest-layout>
  @section('content')
  <div class="wrapper wrapper-full-page ">
    <div class="full-page register-page section-image" filter-color="black"
         data-image="../../assets/img/bg/jan-sendereks.jpg">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-6 mr-auto">
              <div class="card card-signup text-center">
                <div class="card-header ">
                  <h4 class="card-title">Register</h4>
                </div>
                <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                  <div class="card-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-single-02"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Nombre"
                             name="name" id="name" :value="old('name')" required autofocus
                             autocomplete="name">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-email-85"></i>
                        </span>
                      </div>
                      <input type="email" placeholder="Correo Electronico" class="form-control"
                             id="email" name="email" :value="old('email')" required>
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-circle-10"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Contraseña"
                             id="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-circle-10"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control"
                             placeholder="Confirmar contraseña" id="password_confirmation"
                             name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="card-footer ">
                    <button type="submit" class="btn btn-info btn-round">
                      Registrarse
                    </button>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
@endsection
</x-guest-layout>
