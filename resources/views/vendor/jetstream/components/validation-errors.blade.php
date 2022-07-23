@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-warning" role="alert">{{ __('Whoops! Algo ha ido mal.') }}</div>

        <ul class="list-group list-group-flush">
            @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
