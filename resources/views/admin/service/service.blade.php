@extends('layouts.admin.app')

@section('stylesheets')

@endsection

@section('content')


<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>All Check Up Lists</h3>
        </div>
        <div class="module-body table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient's Name</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ isset($service->patient) ? $service->patient->name : 'N/A'}}</td>
                        <td>{{ $service->result }}</td>
                        <td>
                            <a href="{{ route('get-service-result', $service->id)  }}"><i class="fas fa-external-link-alt"></i></a>
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