@extends('layouts.dashboard')
<title>Dashboard | Create</title>
@section('content')

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="{{route('post.index')}}">post list</a>
              </li>
              <li class="breadcrumb-item">Create post</li>
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
                      <h3 class="card-title">Create post</h3>
                      <a href="{{route('post.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                <div class="card">
                  <div class=" col-12 col-lg-8 offset-lg-2 col-md-8 offset-lg-2">
                      <!-- form start -->
                  <form action="{{route('post.store')}}" method="POST" 
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="title"> Post Title</label>
                            <input type="text"
                            name="title" 
                            class="form-control" 
                            id="title" 
                            value="" 
                            placeholder="Enter title" required>
                          </div>
                          <div class="form-group">
                            <label for="cate"> Post Catgeory</label>
                            
                            <select name="category"
                                    id="category"
                                    value=""  
                                    class="form-control" placeholder="Enter title" required>
                              <option value="" style="display: none" selected>Select Category</option>
                              @foreach($categories as $c)
                              <option value="{{$c->id}}">{{$c->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <div class="custom-file">
                                <input type="file" 
                                      value="" 
                                       name="image"
                                       class="custom-file-input"
                                       id="custom-file">
                                <label class="custom-file-label"for="image">Chose File</label>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description"
                                      id="description"
                                      rows="2"
                                      class="form-control"
                                      placeholder="Enter the description">
                            </textarea>
                          </div>

                          <div class="form-group">
                            <label for="tags">Select Tags</label>
                            <div class="d-flex flex-wrap">
                              @foreach ($tags as $tag)
                              <div class="custom-control custom-checkbox ml-4">
                                <input class="custom-control-input" 
                                       type="checkbox" 
                                       name="tags[]"
                                       id="tag{{$tag->id}}" 
                                       value="{{$tag->id}}">
                                <label for="tag{{$tag->id}}" 
                                  class="custom-control-label">{{$tag->name}}
                                </label>
                              </div>
                              @endforeach
                             </div>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
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
