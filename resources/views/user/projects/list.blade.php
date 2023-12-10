@extends('user.layouts.master')
@section('title')
    All User Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .dataTables_filter {
            margin-bottom: 10px !important;
        }
    </style>
@endpush

@section('content')
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">User Management</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user-projects.index') }}">User</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('user-projects.create') }}" class="btn add-btn"><i class="fa fa-plus"></i> Create Your Information</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">User Information</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="myTable" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Project ID</th>
                                    <th>Client Name</th>
                                    <th>Client Email</th>
                                    <th>Client Phone</th>
                                    <th>Client Address</th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $key => $project)
                                    <tr>
                                        <td>#{{$project->project_id}}</td>
                                        <td>{{ $project->FirstName }} {{ $project->LastName }}</td>
                                        <td>{{ $project->EnterEmail }}</td>
                                        <td>{{ $project->EnterNumber }}</td>
                                        <td>{{ $project->EnterCity ?? '' }}, {{ $project->EnterState ?? '' }}, {{ $project->CountryofResidence ?? '' }}</td>

                                        <td>
                                           {{ $project->status }}
                                        </td>
                                        <td>
                                            <a title="View Project" data-route=""
                                            href="{{route('user-projects.show', base64_encode($project->id))}}"><i class="fas fa-eye"></i></a>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            //Default data table
            $('#myTable').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": [5,6]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1, 2, 3, 4]
                    }
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this project.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        window.location = $(this).data('route');
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
        });

        $(document).on('click', '#project', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "assign as a project.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        window.location = $(this).data('route');
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
        });
    </script>
@endpush
