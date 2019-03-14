
@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Categories</h3>
            <!-- /.box-tools -->
        </div>

        <!-- /.box-header -->
        <div class="box-body">
           <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="form-group">
                   <label for="name" class="control-label col-md-2">Category Name</label>
                   <div class="col-md-10">
                       <input class="form-control" type="text" name="name" value="{{old('name')}}">
                   </div>
               </div>



               <div class="form-group">
                   <label for="image" class="control-label col-md-2">Image</label>
                   <div class="col-md-10">
                       <input class="form-control" type="file" name="image" value="{{old('image')}}">
                   </div>
               </div>

               <div class="form-group ">
                   <div class="col-md-10 col-md-push-2">
                       <button type="submit" class="btn btn-primary btn-block">Save</button>
                   </div>
               </div>

           </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop