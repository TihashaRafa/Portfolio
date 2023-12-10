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
                                <a href="{{ route('experience.create') }}" class="btn btn-primary">Add Experience Content</a>
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
                                            <th>Title</th>
                                            <th>Starting Year</th>
                                            <th>ending Year</th>
                                            <th>Experience Title</th>
                                            <th>Organization</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($experience as $key => $items)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $items->title }}</td>
                                            <td>{{ $items->start_year }}</td>
                                            <td>{{ $items->experience_title }}</td>
                                            <td>{{ $items->organization }}</td>
                                            <td>{{ $items->description }}</td>
                                            <td>
                                              <a href="{{ route('experience.edit', $items->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                              <a href="{{ route('experience.delete', $items->id) }}" class="btn btn-primary btn-sm">Delete</a>
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
