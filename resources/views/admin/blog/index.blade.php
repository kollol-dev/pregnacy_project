@extends('layouts.admin.app')

@section('stylesheets')

@endsection

@section('content')


<div class="content">
    <div class="pull-right">
        <button  class="btn btn-primary">
            <a href="/admin/blog/add">Add Blog</a>
        </button>
    </div>
    <div class="module-body table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ substr($blog->description, 0, 200) }}...</td>
                    <td>Admin</td>
                    <td>
                        <a href="{{ route('admin.blog.destroy', ['id' =>$blog->id]) }}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/.content-->

@endsection

@section('page_scripts')

@endsection
