@extends('layouts.admin.app')

@section('stylesheets')

@endsection

@section('content')


<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>All Patients</h3>
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
                    @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ isset($patient->phone) ? $patient->phone : 'N/A' }}</td>
                        <td>{{ isset($patient->address) ? $patient->address : 'N/A' }}</td>
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
