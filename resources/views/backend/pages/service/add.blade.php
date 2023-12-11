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
                                <h3 class="card-title"> Service Page Form</h3>
                            </div>
                            <form method="POST" action="{{ route('service.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="Service_title" class="col-sm-2 col-form-label">Service Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Service_title" name="Service_title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="Service_num" class="col-sm-2 col-form-label">Service Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="Service_num" name="Service_num">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description" name="description">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="image" name="image">
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
