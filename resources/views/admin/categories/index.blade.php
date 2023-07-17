@extends('admin.layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All Categories</h1>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
  <div class="col-12">
    @if (session('success'))
    <div class="alert alert-{{ session('type')}}">
      {{ session('success')}}
    </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Categories</h3>
    
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
              <tr>
              <td>{{ $category->id}}</td>
              <td>{{ $category->name}}</td>
              <td>{{ $category->created_at}}</td>
              <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success btn-sm " ><i class="fas fa-edit"></i>  Edit</a>

                <form action="{{ route('categories.destroy', $category->id)}}" class="d-inline" method="POST">
                @csrf
                @method('delete')
                <button onclick="return confirm('Are You Sure ?')" class="btn btn-sm btn-danger"><i class="fas fa-trash"> Delete</i></button>
                </form>

              </td>
            </tr>
            @endforeach
            
          
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  </div>
</div>
</div>



@stop