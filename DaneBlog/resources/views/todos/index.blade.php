@extends('layouts.app')
@section('content')
<div class='container mb-5 '>
<h1 class="text-success">Todos</h1><br/>

@if(count($todos) > 0)
    @foreach($todos as $todo)
    <div class="col-lg-9 col-md-12 " >
        <div class='card'>
            <div class="card-body">

            <h4 ><a href='todo/{{$todo->id}}' class='card-link'> <b class='pr-3'>{{$todo->text}}</b>
            <span class="badge badge-warning float-right"><h5>{{$todo->due}}</h5></span>
                 </a>
            </h4>

            </div>
        </div>
    </div>
<br/>
    @endforeach
@endif
</div>
<br><br><br>
@endsection

@section('sidebar')

@parent
@if(Auth::user())
<a class='btn btn-default ' onclick="window.history.back();"><h3><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/> </h3></a>
@else
<a class='btn btn-default ' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>


@endsection
