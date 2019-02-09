<br/>
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
        @endforeach
    @endif

    @if(session('success'))

    <div class="alert alert-success alert-dismissible col-lg-6 col-md-8">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{session('success')}}
    </div>
    @endif

    @if(session('failupload'))

    <div class="alert alert-danger alert-dismissible col-lg-6 col-md-8">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{session('failupload')}}
    </div>
    @endif
