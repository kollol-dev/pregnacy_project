@extends('layouts.admin.app')

@section('stylesheets')

@endsection

@section('content')


<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>All Doctors</h3>
        </div>
        <div class="module-option clearfix">
            <div class="pull-right">
                <button  class="btn btn-primary">
                    <a href="/admin/dashboard/doctor/add">Add Doctor</a>
                </button>
            </div>

            <!-- add modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="/admin/dashboard/app/add/doctor" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name: *</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email: *</label>
                                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Password: *</label>
                                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Phone: *</label>
                                    <input type="text" name="phone" class="form-control  @error('phone') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Address: *</label>
                                    <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- add modal end -->

        </div>
        <div class="module-body table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ isset($doctor->phone) ? $doctor->phone : 'N/A' }}</td>
                        <td>{{ isset($doctor->address) ? $doctor->address : 'N/A' }}</td>
                        <td>
                            <a href="{{ route('admin.dashboard.delete-doctor', ['id' =>$doctor->id]) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/.module-->
</div>
<!--/.content-->

@endsection

@section('page_scripts')

@endsection
