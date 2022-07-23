<x-guest-layout>
    @section('content')
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-light">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">Paper Dashboard 2 PRO</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    @if (Route::has('login'))
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify" href="{{ route('dashboard') }}">
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify" href="{{ route('login') }}">
                                        <p>
                                            Login
                                        </p>
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link btn-magnify" href="{{ route('register') }}">
                                            <p>
                                                Register
                                            </p>
                                        </a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    @endif
                </div>
            </div>
        </nav>

        <div class="full-page register-page section-image" filter-color="black" data-image="../assets/img/bg/jan-sendereks.jpg">
        <div class="content col-md-12 ml-auto mr-auto">
            <div class="header py-5 pb-7 pt-lg-9">
                <div class="container col-md-10">
                    <div class="header-body text-center mb-7">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 pt-5">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
</x-guest-layout>
