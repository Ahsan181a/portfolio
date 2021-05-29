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
      <th scope="col">Image</th>
      <th scope="col">Title1</th>
      <th scope="col">Title2</th>
      <th scope="col">Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @if (count($abouts) > 0)
      @foreach ($abouts as $about)
          <tr>
              <td scope="row">{{$about->id}}</td>
              <td>
                  <img style="height: 10vh" src="{{url($about->image)}}" alt="image">
              </td>
              <td>{{$about->title1}}</td>
              <td>{{$about->title2}}</td>
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
      
  @endif
                  
  </tbody>
</table>
</div>
@endsection