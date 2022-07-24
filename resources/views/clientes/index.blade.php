<x-app-layout>
  @section('content')
  <div class="content">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista de Clientes</li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-md-12">
        <a href="" class="btn btn-warning btn-round">
          Crear Cliente
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista de Clientes</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>NIT</th>
                    <th>Razón Social</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>  
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-app-layout>