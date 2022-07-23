<x-guest-layout>
    @section('content')
        <div class="wrapper wrapper-full-page">
            <div class="full-page section-image" filter-color="black" data-image="../assets/img/bg/fabio-mangione.jpg">
                <div class="content">
                    <div class="container">
                        <div class="col-lg-10 col-md-6 ml-auto mr-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header text-center">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="nc-icon nc-email-85"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                                        </div>
                                        <a href="{{ route('password.email') }}">
                                            <button type="submit" class="btn btn-warning btn-round btn-block mb-3">
                                              Resetear Contraseña  
                                            </button> 
                                            </a>
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
