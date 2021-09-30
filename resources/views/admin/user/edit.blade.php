@extends('layouts.dashboard')
<title>Dashboard | Edit</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="{{route('user.index')}}">User list</a>
              </li>
              <li class="breadcrumb-item">Edit user</li>
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
                      <h3 class="card-title">
                        Edit user - {{$user->name}}
                      </h3>
                      <a href="{{route('user.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                <div class=" card-primary">
                  <div class=" col-12 col-lg-6 offset-lg-3 col-md-8 offset-lg-2">
                      <!-- form start -->
                  <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="form-group">
                        @include('includes.errors')
                        <label for="name">Name</label>
                        <input type="text"
                            name="name" 
                            class="form-control" 
                            id="name" 
                            value="{{ $user->name }}"
                            placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                         <input id="email" 
                                type="email" 
                                class="form-control" 
                                name="email" 
                                value="{{ $user->email }}"
                                placeholder="Type Email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password <small>(If You Want To Change)</small></label>
                        <input type="password"
                            name="password" 
                            class="form-control" 
                            id="password" 
                            value="{{ $user->password }}"
                            placeholder="Enter password">
                      </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                  </div>
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
