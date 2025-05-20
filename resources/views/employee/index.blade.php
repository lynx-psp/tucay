@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content ">
        <div class="container-fluid">
            <div class="row ">

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="col-6 m-auto">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <plyoee class="card-title">Add new employee</h3>
                        </div>

                        <form action="{{ route('employee.store') }}" method="POST">
                            @csrf
                            <div class="row card-body col-12">
                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">First Name
                                    </label>
                                    <input type="text" class="form-control g-2" id="fname" name="fname"
                                        placeholder="Enter your first name" require>
                                </div>
                                @error('fname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname"
                                        placeholder="Enter your last name">
                                </div>
                                @error('lname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror




                                <div class="form-group col-6">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter address">
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror



                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                                </div>
                                @error('zip')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success col-6">Submit</a>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->






                <div class="card-body">



                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($employees as $items)
                                <tr>

                                    <td class="">{{ $items->id }}</td>
                                    <td>{{ $items->fname }}</td>
                                    <td>{{ $items->lname }}</td>
                                    <td>{{ $items->zip }}</td>
                                    <td>
                                            <a href="{{ route('employee.edit', $items->id) }}"  class="btn btn-primary btn-sm">Update</a>

                                            <a href="{{ route('employee.delete', $items->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="card-footer">

                </div>


                <!-- /.row -->
            </div><!-- /.container-fluid -->

        <!-- /.content -->
    @endsection
