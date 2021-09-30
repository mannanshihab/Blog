@extends('layouts.dashboard')
<title>Dashboard | Show</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid mr-auto">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">View Post</h3>
                      <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 250px">Post Id</th>
                          <td>{{ $post -> id }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Category Name</th>
                          <td>{{ $post -> category-> name }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Post Title</th>
                          <td>{{ $post -> title }}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Image</th>
                          <td>
                            <div>
                              <img style="width: 300px" 
                                src="{{asset($post->image)}}">
                            </div>
                          </td>
                        </tr>
                         <tr>
                          <th style="width: 250px">Description</th>
                          <td>{!! $post -> description !!}</td>
                        </tr>
                        <tr>
                          <th style="width: 250px">Tags</th>
                          <td>
                              @foreach($post ->tags as $tag)
                                <span class="badge badge-primary">{{ $tag->name }}</span>
                              @endforeach
                          </td>
                        </tr>
                      </tbody>
                    </table>
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

@section('style')
  <link rel="stylesheet" href="{{asset('admin/css/summernote-bs4.min.css')}}">
@endsection

@section('script')
  <script src="{{asset('admin/js/summernote-bs4.min.js')}}"></script>
  <script>
    $('#description').summernote ({
      placeholder: 'Hello Bootstrap',
      tabsize: 2,
      height: 100
    });
  </script>


@endsection
