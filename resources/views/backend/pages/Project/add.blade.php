@extends('backend.Layouts.admin')
@section('admin_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Project Page Form</h3>
                            </div>
                            <form method="POST" action="{{ route('project.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="Project_title" class="col-sm-2 col-form-label">Project Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Project_title" name="Project_title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Project Image</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="category" name="category">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
