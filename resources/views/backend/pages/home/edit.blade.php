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
                            <form method="POST" action="{{ route('home.update', $homepage->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                 
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $homepage->name  }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $homepage->title }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_one" class="col-sm-2 col-form-label">Title One</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_one" name="title_one"
                                            value="{{ $homepage->title_one }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_two" class="col-sm-2 col-form-label">Title Two</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_two" name="title_two"
                                            value="{{ $homepage->title_two }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="title_three" class="col-sm-2 col-form-label">Title Three</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="title_three" name="title_three"
                                            value="{{ $homepage->title_three }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="description" name="description"
                                            value="{{ $homepage->description }}">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="test" class="form-control" id="image" name="image"">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="button_one" class="col-sm-2 col-form-label">Button one</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="button_one" name="button_one" value="{{ $homepage->button_one }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="button_two" class="col-sm-2 col-form-label">Button Two</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="button_two" name="button_two" value="{{ $homepage->button_two }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="number" class="col-sm-2 col-form-label">Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="number" name="number" value="{{ $homepage->number }}" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $homepage->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="address" name="address" value="{{ $homepage->address }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
