
@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
                <a href=""> <span class="label label-primary"><i class="fa fa-plus"></i> Add User</span> </a>
            </div>
            <!-- /.box-tools -->
        </div>

        <!-- /.box-header -->
        <div class="box-body">
           <form method="post" action="{{route('users.store')}}">
               {{ csrf_field() }}
               <div class="form-group">
                   <label for="name" class="control-label col-md-2">User Name</label>
                   <div class="col-md-10">
                       <input class="form-control" type="text" name="name" value="{{old('name')}}">
                   </div>
               </div>

               <div class="form-group">
                   <label for="password" class="control-label col-md-2">Password</label>
                   <div class="col-md-10">
                       <input class="form-control" type="password" name="password" value="{{old('password')}}">
                   </div>
               </div>

               <div class="form-group">
                   <label for="email" class="control-label col-md-2">Email</label>
                   <div class="col-md-10">
                       <input class="form-control" type="email" name="email" value="{{old('email')}}">
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