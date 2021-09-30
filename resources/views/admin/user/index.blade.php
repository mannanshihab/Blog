@extends('layouts.dashboard')
<title>Dashboard | user</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">User list</li>
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
                      <h3 class="card-title">User Table</h3>
                      <a href="{{route('user.create')}}" class="btn btn-primary">Create user</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Slug</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if ($users->count())
                        @foreach ($users as  $user)
                        <tr>
                          <td>{{ $user -> id }}</td>
                          <td>{{ $user -> name }}</td>
                          <td>{{ $user -> email }}</td>
                          <td>{{ $user -> slug }}</td>
                          <td class="d-flex">
                            <a href="{{route('user.edit',[$user->id])}}" class="btn btn-sm btn-primary m-1">
                              <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('user.destroy',[$user->id])}}" 
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
                              <h5 class="text-center">No Users Found</h5>
                            </td>
                          </tr>
                        @endif
                      </tbody>
                    </table>
                    <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      {{ $users -> links() }}
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
