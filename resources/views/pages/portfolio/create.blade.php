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
        <a class="" href="{{asset('admin.dashboard')}}"></a>
      </h3>
    </div>
    <div class="card-body">
    <form action="{{route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Big Image</h3>
                <img style="height: 30vh" src="{{asset('admin/fontend/assets/img/portfolio/01-full.jpg')}}" class="img-thumbnail">
                <input class="mt-3" type="file"  name="big_image">
                </div>
                <div class="form-group col-md-3 mt-3">
                    <h3>Small Image</h3>
                <img style="height: 30vh" src="{{asset('admin/fontend/assets/img/portfolio/02-full.jpg')}}" class="img-thumbnail">
                <input class="mt-3" type="file"  name="small_image">
                </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="title"><h4>Title</h4></label>
                    <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="sub_title"><h4>Client</h4></label>
                        <input type="text" class="form-control" id="" name="client" value="">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="sub_title"><h4>Category</h4></label>
                        <input type="text" class="form-control" id="" name="category" value="">
                    </div>
                <div class="col-sm-6">
                        <label for="description"><h4>Description</h4></label>
                        <textarea class="form-control" name="description" id="" rows="5" col='15'></textarea>
                    </div>
                </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
        </form>
    </div>
</div>
@endsection