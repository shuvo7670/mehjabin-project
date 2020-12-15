@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="bg-danger form-control text-light">{{$error}}</div>
    @endforeach
@endif
