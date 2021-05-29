@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-home"></i> Main</h1>
        </div>
    </div>
    <div class="row">
 <div class="card shadow col-md-12">
    <div class="card-header">
         <h3>
        main part
        <a class="btn btn-success float-right btn btn-sm" href="{{asset('admin.dashboard')}}"><i class="fa fa-plus-circle"></i>Add</a>
      </h3>
    </div>
    <div class="card-body">
    <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                <img style="height: 30vh" src="{{url($main->bc_img)}}" class="img-thumbnail">
                <input class="mt-3" type="file" id="bc_img" name="bc_img">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
                    </div>
                    <div>
                        <h4>Upload Resume</h4>
                        <input class="mt-2" type="file" id="resume" name="resume">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
        </form>
    </div>
</div>
@endsection
