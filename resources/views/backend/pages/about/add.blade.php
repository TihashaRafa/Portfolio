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
                                <h3 class="card-title"> About Page Form</h3>
                            </div>
                            <form method="POST" action="{{ route('about.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="description_one" class="col-sm-2 col-form-label">Description One</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description_one" name="description_one">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description_two" class="col-sm-2 col-form-label">Description Two</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description_two" name="description_two" >
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="description_three" class="col-sm-2 col-form-label">Description Three</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description_three" name="description_three">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="age" name="age">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="birth" class="col-sm-2 col-form-label">Birth</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="birth" name="birth">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="experience_year" class="col-sm-2 col-form-label">Exprience Year</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="experience_year" name="experience_year">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="experience" class="col-sm-2 col-form-label">Exprience</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="experience" name="experience"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="project_num" class="col-sm-2 col-form-label">Project Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="project_num" name="project_num"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="project" class="col-sm-2 col-form-label">Project</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="project" name="project"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="client_num" class="col-sm-2 col-form-label">Client Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="client_num" name="client_num"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="client" class="col-sm-2 col-form-label">Client</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="client" name="client"">
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
