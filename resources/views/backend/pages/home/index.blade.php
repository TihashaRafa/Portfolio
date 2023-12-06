@extends('backend.Layouts.admin')
@section('admin_content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Home Page </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}} 
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('home.create') }}" class="btn btn-primary">Add Home Content</a>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Title One</th>
                                            <th>Title Two</th>
                                            <th>Title Three</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Button one</th>
                                            <th>Button Two</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($homepage as $key => $items)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $items->name }}</td>
                                            <td>{{ $items->title }}</td>
                                            <td>{{ $items->title_one }}</td>
                                            <td>{{ $items->title_two }}</td>
                                            <td>{{ $items->title_three }}</td>
                                            <td>{{ $items->description }}</td>
                                            <td>{{ $items->image }}</td>
                                            <td>{{ $items->button_one }}</td>
                                            <td>{{ $items->button_two }}</td>
                                            <td>{{ $items->number }}</td>
                                            <td>{{ $items->email }}</td>
                                            <td>{{ $items->address }}</td>
                                           
                                            <td>
                                              <a href="{{ route('home.edit', $items->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                              <a href="{{ route('home.delete', $items->id) }}" class="btn btn-primary btn-sm">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
