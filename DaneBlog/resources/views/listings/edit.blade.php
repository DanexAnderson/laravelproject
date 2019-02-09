@extends('layouts.app')

@section('content')

<div class="row container-fluid">

    <div class='col-md-8 col-md-offsef-2 '>
        <div class='panel panel-default'>

            <h3> Edit Client </h3>
            <br/>

        </div>

        <div class="panel-content">

                {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}

                {{ Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}

                {{ Form::bsText('email',$listing->email,['placeholder'=>'example@gmail.com'])}}

                {{ Form::bsText('website',$listing->website,['placeholder'=>'www.example.com'])}}

                {{ Form::bsText('phone',$listing->phone,['placeholder'=>'876-555-5555'])}}

                {{ Form::bsText('address',$listing->address,['placeholder'=>'Business Address'])}}

                {{ Form::bsText('bio',$listing->bio,['placeholder'=>'About this Business'])}}

                <!-- {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}} -->

                {{ Form::bsSubmit('Submit')}}

                {{Form::hidden('_method', 'PUT')}}

                {!! Form::close() !!}

        </div>

    </div>
</div>



@endsection

@section('sidebar')

@parent

<a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>

@endsection
