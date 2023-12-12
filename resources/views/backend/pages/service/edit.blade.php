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
                    <!-- left column -->
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Sidebar Edit Form</h3>
                            </div>
                            <form class="form-horizontal" method="POST"
                                action="{{ route('service.update', $service->id) }}">
                                @csrf

                                <div class="card-body">

                                  <div class="form-group row">
                                    <label for="Service_title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="Service_title" id="Service_title"
                                            value="{{ $service->Service_title }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                  <label for="Service_num" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="Service_num" id="Service_num"
                                          value="{{ $service->Service_num }}">
                                  </div>
                              </div>

                                    <div class="form-group row">
                                      <label for="description" class="col-sm-2 col-form-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="description" id="description"
                                              value="{{ $service->description }}">
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="image" id="image"
                                            value="{{ $service->image }}">
                                    </div>
                                </div>
                               
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Update</button>
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
