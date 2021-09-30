@extends('layouts.dashboard')
<title>Dashboard | Tag</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tag Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li> -->
              <li class="breadcrumb-item active">Tag list</li>
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
                      <h3 class="card-title">Tag Table</h3>
                      <a href="{{route('tag.create')}}" class="btn btn-primary">Create tag</a>
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
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if ($tags->count())
                        @foreach ($tags as  $tag)
                        <tr>
                          <td>{{ $tag -> id }}</td>
                          <td>{{ $tag -> name }}</td>
                          <td>{{ $tag -> slug }}</td>
                          <td class="d-flex">
                            <a href="{{route('tag.edit',[$tag->id])}}" class="btn btn-sm btn-primary m-1">
                              <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('tag.destroy',[$tag->id])}}" 
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
                            <td colspan="4">
                              <h5 class="text-center">No Tags Found</h5>
                            </td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                    
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="text-center">
                  <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item">
                        {{ $tags -> links() }}
                      </li>
                    </ul>
                </div>
              </div>
          </div>
          <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
