<x-app-layout>
  @section('content')
  <div class="content">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Lista de Clientes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear Cliente</li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Crear Nuevo Cliente</h3>
          </div>
          <div class="card-body">
            <form role="form" action="" method="post">
              @include('clientes.formcliente')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-app-layout>