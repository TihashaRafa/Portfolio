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
                                action="{{ route('sidebar.update', $sideBer->id) }}">
                                @csrf

                                <div class="card-body">

                                  <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="image" id="image"
                                            value="{{ $sideBer->image }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="name" id="name"
                                          value="{{ $sideBer->name }}">
                                  </div>
                              </div>


                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" id="title"
                                                value="{{ $sideBer->title }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                value="{{ $sideBer->slug }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                      <label for="name" class="col-sm-2 col-form-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="name" id="name"
                                              value="{{ $sideBer->name }}">
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="fb_link" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fb_link" id="fb_link"
                                            value="{{ $sideBer->fb_link }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                  <label for="linkedin_link" class="col-sm-2 col-form-label">LinkedIn</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="linkedin_link" id="linkedin_link"
                                          value="{{ $sideBer->linkedin_link }}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                <label for="git_link" class="col-sm-2 col-form-label">Github</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="git_link" id="git_link"
                                        value="{{ $sideBer->git_link }}">
                                </div>
                            </div>


                            <div class="form-group row">
                              <label for="content" class="col-sm-2 col-form-label">Footer Content</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="content" id="content"
                                      value="{{ $sideBer->footer_content }}">
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
