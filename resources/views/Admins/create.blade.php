

@extends('layout.app')


@section('MainTitle')
create admin
@endsection


@section('content')
@if (Session::has("done"))
<div class="alert alert-success">
    {{Session::get("done")}}
</div>
@endif

<form action="{{Route("admin.store")}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="">Admin name</label>
    <input type="text" name="AdminName" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin email</label>
    <input type="text" name="AdminEmail" class="form-control">
</div>
<div class="form-group">
    <label for="">Admin password</label>
    <input type="text" name="AdminPassword" class="form-control">
</div>
<form class="form-group">
    <label for="">Admin image </label>
    <input type="file" name="AdminImage" class="form-control">
</div>
<div class="d-grid">
    <button class="btn btn-info"> Send Data</button>
</div>
</form>
@endsection
