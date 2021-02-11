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
                <button data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" class="btn btn-primary">Add Doctor</button>
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
                    </div>
                </div>
            </div>
            <!-- add modal end -->
            <div class="module-option clearfix">
                <form action="/admin/dashboard/app/add/doctor" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name: *</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email: *</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password: *</label>
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Phone: *</label>
                        <input type="text" name="phone"  value="{{ old('phone') }}" class="form-control  @error('phone') is-invalid @enderror">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Address: *</label>
                        <textarea name="address"  class="form-control  @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.module-->
</div>
<!--/.content-->

@endsection

@section('page_scripts')

@endsection
