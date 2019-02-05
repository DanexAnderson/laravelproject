@extends('layouts.app')

@section('content')

<div class="row container-fluid">

    <div class='col-md-8 col-md-offsef-2'>
        <div class='panel panel-default'>

            <h3> Create Client </h3>
            <br/>

        </div>

        <div class="panel-content">

                {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}

                {{ Form::bsText('name','',['placeholder'=>'Company Name'])}}

                {{ Form::bsText('email','',['placeholder'=>'example@gmail.com'])}}

                {{ Form::bsText('website','',['placeholder'=>'www.example.com'])}}

                {{ Form::bsText('phone','',['placeholder'=>'876-555-5555'])}}

                {{ Form::bsText('address','',['placeholder'=>'Business Address'])}}

                {{ Form::bsText('bio','',['placeholder'=>'About this Business'])}}

                <!-- {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}} -->

                {{ Form::bsSubmit('Submit')}}

                {!! Form::close() !!}

        </div>

    </div>
</div>



@endsection

@section('sidebar')

@parent

<a class='btn btn-default text-primary' href='/home'><h3><< Back </h3></a>

@endsection
