@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
        <h1><i class="fa fa-home"></i> Create</h1>
        </div>
    </div>
    <div class="row">
 <div class="card shadow col-md-12">
    <div class="card-header">
         <h3>
       Create part
        <a class="btn btn-success float-right btn btn-sm" href="{{asset('admin.dashboard')}}"><i class="fa fa-plus-circle"></i>Add</a>
      </h3>
    </div>
    <div class="card-body">
    <form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="icon"><h4>font fontawesome icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" value="">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4> Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-5">
                        <label for="description"><h4>Description</h4></label>
                        <textarea type='text' class="form-control" name="description" id="description" ></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
        </form>
    </div>
</div>
@endsection