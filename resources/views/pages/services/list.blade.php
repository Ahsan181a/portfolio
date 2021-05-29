@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fas fa-ellipsis-v"></i>List</h1>
        </div>
    </div>
    <div class="row">
 <div class="card shadow col-md-12">
    <div class="card-header">
         <h3>
        part
        <a  href="{{asset('admin.dashboard')}}"></a>
      </h3>
    </div>
    <div class="card-body">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Icon</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($services as $service)
    <tr>
      <th scope="row">{{$service->id}}</th>
      <td>{{$service->icon}}</td>
      <td>{{$service->title}}</td>
      <td>{{$service->description}}</td>
      <td>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
           
            </div>
            
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection