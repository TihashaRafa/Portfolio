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
                                <h3 class="card-title"> Home Page Form</h3>
                            </div>
                            <form method="POST" action="{{ route('home.add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name Here...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Title Here...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_one" class="col-sm-2 col-form-label">Title One</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_one" name="title_one"
                                                placeholder="1st Title Here...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_two" class="col-sm-2 col-form-label">Title Two</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_two" name="title_two"
                                                placeholder="Second Title Here...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_three" class="col-sm-2 col-form-label">Title Three</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_three" name="title_three"
                                                placeholder="Third Title Here...">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description" name="description"
                                                placeholder="Description Here...">
                                        </div>
                                    </div>


                                   

                                    <div class="form-group row">
                                        <label for="button_one" class="col-sm-2 col-form-label">Button One</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="button_one" name="button_one"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="button_two" class="col-sm-2 col-form-label">Button Two</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="button_two" name="button_two"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="number" class="col-sm-2 col-form-label">Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="number" name="number"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="address" name="address"">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Image Update</label>
                                        <div class="btn-group w-100">
                                            <span class="btn btn-success col fileinput-button dz-clickable">
                                              <i class="fas fa-plus"></i>
                                              <span>Add files</span>
                                            </span>
                                            <button type="submit" class="btn btn-primary col start">
                                              <i class="fas fa-upload"></i>
                                              <span>Start upload</span>
                                            </button>
                                            <button type="reset" class="btn btn-warning col cancel">
                                              <i class="fas fa-times-circle"></i>
                                              <span>Cancel upload</span>
                                            </button>
                                          </div>

                                          <div class="col-lg-6 d-flex align-items-center">
                                            <div class="fileupload-process w-100">
                                              <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress=""></div>
                                              </div>
                                            </div>
                                          </div>

                                          <div class="table table-striped files" id="previews">
                  
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
