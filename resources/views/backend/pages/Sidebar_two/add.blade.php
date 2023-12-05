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
                                <h3 class="card-title"> Sidebar Form</h3>
                            </div>
                            <form method="POST" action="{{ route('sidebars.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fb_link" name="fb_link"
                                                ">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">LinkedIn</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="linkedin_link" name="linkedin_link">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Github</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="git_link" name="git_link">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Footer Content</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="content" name="content">
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
