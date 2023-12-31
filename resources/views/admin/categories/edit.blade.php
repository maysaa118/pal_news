@extends('admin.layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update Category</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route ('categories.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" class="form-control mb-3"  value="{{ $category->name}}" name="name" placeholder="Category Name">
                    <button class="btn btn-info">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop