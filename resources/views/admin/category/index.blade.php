@extends('layouts.dashboard')
<title>Dashboard | Category</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Category list</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Category Table</h3>
                      <a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Post Count</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if ($categories->count())
                        
                        @foreach ($categories as  $category)
                        <tr>
                          <td>{{ $category -> id }}</td>
                          <td>{{ $category -> name }}</td>
                          <td>{{ $category -> slug }}</td>
                          <td>{{ $category -> id }}</td>
                          <td class="d-flex">
                            <a href="{{route('category.edit',[$category->id])}}" class="btn btn-sm btn-primary m-1">
                              <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('category.destroy',[$category->id])}}" 
                                  class="m-1" method="POST">
                                  @method('DELETE')
                                  @csrf
                              <button class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                              </button>
                            </form>  
                          </td>
                        </tr>
                        @endforeach
                        @else
                          <tr>
                            <td colspan="5">
                              <h5 class="text-center">No Catgeory Found</h5>
                            </td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                    <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      {{ $categories -> links() }}
                      <!-- <li class="page-item"><a class="page-link" href="#">«</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">»</a></li> -->
                    </ul>
                  </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
          </div>
          <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
