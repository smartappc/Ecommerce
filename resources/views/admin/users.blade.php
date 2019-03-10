
@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
                <a href="{{route('users.create')}}"> <span class="label label-primary"><i class="fa fa-plus"></i> Add User</span> </a>
            </div>
            <!-- /.box-tools -->
        </div>

        <!-- /.box-header -->
        <div class="box-body">
           <table class="table table-bordered table-striped table-hover">
               <thead>
                  <tr>
                      <th>#ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Control</th>
                  </tr>
               </thead>
               <tbody>
                  @if(count($users) > 0)
                   @foreach($users as $user)
                   <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email}}</td>
                       <td>

                       </td>
                   </tr>
                   @endforeach
                   @endif
               </tbody>
           </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop