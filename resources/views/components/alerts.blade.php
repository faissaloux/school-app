@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger fade in block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="icon-info"></i> {{ __($error) }}
        </div>
    @endforeach
@endif

@if (Session::has('success'))
    <div class="alert alert-success fade in block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <i class="icon-info"></i> {{ Session::get('success') }}
    </div>
@endif
