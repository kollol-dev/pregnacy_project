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
                <form action="{{  route('admin.blog.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title: *</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Description: *</label>
                        <textarea name="description"  class="form-control  @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description')
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
