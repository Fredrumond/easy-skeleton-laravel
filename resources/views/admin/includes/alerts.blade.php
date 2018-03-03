@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Oops!</strong> Houve alguns problemas com a sua entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif   