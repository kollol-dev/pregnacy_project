@extends('layouts.admin.app')

@section('stylesheets')

@endsection

@section('content')

<div class="content">

    <div class="module">
        <div class="module-head">
            <h3>Doctors</h3>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>Blogs</h3>
        </div>
        <div class="module-body table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ substr($blog->description, 0, 200) }}...</td>
                        <td>Admin</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>Patients</h3>
        </div>
        <div class="module-body table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <!-- <th>Phone</th>
                            <th>Address</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <!-- <td>{{ isset($patient->phone) ? $patient->phone : 'N/A' }}</td>
                            <td>{{ isset($patient->address) ? $patient->address : 'N/A' }}</td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--/.module-->
</div>
<!--/.content-->

@endsection

@section('page_scripts')

@endsection