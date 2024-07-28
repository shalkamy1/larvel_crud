@extends('layout.app')

@section('MainTitle')
edit admin :{{$edit_Admin->id}}
@endsection

@section('content')


<form action="{{Route("admin.update",$edit_Admin->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Admin name</label>
    <input type="text" name="AdminName" value="{{$edit_Admin->name}}" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin email</label>
    <input type="text" name="AdminEmail" value="{{$edit_Admin->email}}" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin password</label>
    <input type="text" name="AdminPassword" value="{{$edit_Admin->password}}" class="form-control">
</div>
<form class="form-group">
    <label for="">Admin image
        <span>
            <img src="{{asset("upload/$edit_Admin->image")}}" width="40" alt="">
        </span>
    </label>


    <input type="file" name="AdminImage" value="{{$edit_Admin->image}}" class="form-control">
</div>
<div class="d-grid">
    <button class="btn btn-info"> Send Data</button>
</div>
</form>
@endsection
