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
                                <h3 class="card-title"> Experience Page Form</h3>
                            </div>
                            <form method="POST" action="{{ route('experience.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="start_year" class="col-sm-2 col-form-label">Starting Year</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="start_year" name="start_year">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="end_year" class="col-sm-2 col-form-label">Ending Year</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="end_year" name="end_year">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="experience_title" class="col-sm-2 col-form-label">Experience Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="experience_title" name="experience_title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="organization" class="col-sm-2 col-form-label">Organization</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="organization" name="organization">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description" name="description">
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
