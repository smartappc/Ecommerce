
@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            <div class="box-tools pull-right">
                <a href="{{route('categories.create')}}"> <span class="label label-primary"><i class="fa fa-plus"></i> Add Category</span> </a>
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
                      <th>image</th>
                      <th>Control</th>
                  </tr>
               </thead>
               <tbody>
                  @if(count($categories) > 0)
                   @foreach($categories as $category)
                   <tr>
                       <td>{{ $category->id }}</td>
                       <td>{{ $category->name }}</td>
                       <td><img src="{{asset('storage/categories/'. $category->image )}}"alt="category" width="40"> </td>
                       <td>
                           <a href="{{ route('categories.edit', $category->id) }} " class="pull-left btn btn-info btn-sm"><i class="fa fa-edit"></i> {{ trans('admin.edit') }}</a>

                           <form class="pull-left" action="{{  route('categories.destroy', $category->id) }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                               <input type="hidden" name="_method" value="DELETE">
                               &nbsp;<!--space with html-->

                               <button class="btn btn-danger btn-sm"><i class="fa fa-times "></i> {{ trans('admin.delete') }}</button> &nbsp;
                           </form>
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