@extends('layouts.app')

@section('content')
<h1 class="text-primary text-center"><b>Home</b></h1>
@endsection

@section('sidebar')
@parent

<br/><h3><b>Features</b></h3><br/>

<!--<p> <a class='btn btn-primary' href="/messages"> View Post </a></p>-->

<div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"></div>
        <div class="list-group list-group-flush"><b >
          <a href="/messages" class="list-group-item list-group-item-action bg-light">View Post Messages</a>
          <a href="/todo" class="list-group-item list-group-item-action bg-light">View Todo List</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </b></div>
      </div>
@endsection
