@extends('layout.app')

@section('MainTitle')
list admin
@endsection

@section('content')
@if (Session::has("done"))
<div class="alert alert-success">
    {{Session::get("done")}}
</div>
@endif

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col" colspan="3">action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($admin_data as $items)
        <th>{{$loop->iteration}}</th>
        <th>{{$items->name}}</th>
        <th>{{$items->email}}</th>
        <th><a href="{{route("admin.show",$items->id)}}"><i class="text-info fa-solid fa-eye"></i></a> </th>
        <th><a href="{{route("admin.edit",$items->id)}}"><i class="text-warning fa-solid fa-pen-to-square"></i></a> </th>
        <th><a href="{{route("admin.destroy",$items->id)}}"><i class="text-danger fa-solid fa-trash"></i></a> </th>
      </tr>
      @empty

      @endforelse
    </tbody>
  </table>
@endsection
