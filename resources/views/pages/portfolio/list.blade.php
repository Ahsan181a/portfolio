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
       About part
        <a  href="{{asset('admin.dashboard')}}"></a>
      </h3>
    </div>
    <div class="card-body">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Sub_title</th>
      <th scope="col">Big_Image</th>
      <th scope="col">Small_Image</th>
      <th scope="col">Client</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($portfolios as $about)
          <tr>
              <td>{{$about->id}}</td>
              <td>{{$about->title}}</td>
              <td>{{$about->sub_title}}</td>
              <td>
                  <img style="height: 10vh" src="{{url($about->big_image)}}" alt="image">
              </td>
              <td>
                  <img style="height: 10vh" src="{{url($about->small_image)}}" alt="image">
              </td>
              <td>{{$about->client}}</td>
              <td>{{$about->category}}</td>
              <td>{{Str::limit(strip_tags($about->description),40)}}</td>
              <td>
                  <div class="row">
                      <div>
                          <a href="{{route('admin.abouts.edit', $about->id)}}" class="btn btn-primary m-2">Edit</a>
                      </div>
                      <div>
                          <form action="{{route('admin.abouts.destroy', $about->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                          </form>
                      </div>
                  </div>
              </td>
          </tr>
      @endforeach
      
  
                  
  </tbody>
</table>
</div>
@endsection