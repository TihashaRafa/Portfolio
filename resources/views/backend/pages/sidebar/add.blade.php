@extends('backend.Layouts.admin')
@section('admin_content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div>
    </div>


    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8">
             
              <!-- Horizontal Form -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title"> Sidebar Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
             
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="title" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="Title Here...">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="slug" placeholder="Slug">
                      </div>
                    </div>
                   
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="{{ route('sidebar.index') }}" class="btn btn-primary">All </a>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                  </div>
                </form>
              </div>
            </div>
          
          </div>
       
        </div>
      </section>
  </div>


@endsection