@extends('layout.app')

@section('MainTitle')
show admin
@endsection

@section('content')
<img src="{{asset("upload/$show_admin->image")}}" class="img-fluid" alt="">
<hr>
<h6> Admin Name : {{$show_admin->name}}</h6>
<hr>
<h6> Admin email : {{$show_admin->email}}</h6>
<hr>
<h6> Admin password : {{$show_admin->password}}</h6>
@endsection
