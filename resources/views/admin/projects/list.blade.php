@extends('admin.layouts.master')
@section('title')
    All Project Details - {{ env('APP_NAME') }}
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
                        <h3 class="page-title">Projects Management</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        {{-- <a href="{{ route('projects.create') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add a
                            Project</a> --}}
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Projects Management</h4>
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
                                    <th>Assign To</th>
                                    <td>Status</td>
                                    <th>Action</th>
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
                                            <input type="hidden" name="id" id="project_id" value="{{$project->id}}">
                                            <select name="stuff_id" id="stuff_id" class="form-control">
                                                <option value="">Select a stuff</option>
                                                @foreach ($stuffs as $stuff)
                                                    <option value="{{ $stuff['id'] }}" data-id="{{$project->id}}"
                                                        {{ $stuff['id'] == $project['stuff_id'] ? 'selected' : '' }}>
                                                        {{ $stuff['name'] }} ({{ $stuff['email'] }})</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" id="project_id" value="{{$project->id}}">
                                            <select name="status" id="status" class="form-control">
                                                <option value="">Select a Status</option>
                                                <option value="Pending" {{($project->status == 'Pending') ? 'Selected' : ''}}>Pending</option>
                                                <option value="Accept" {{($project->status == 'Accept') ? 'Selected' : ''}}>Accept</option>
                                                <option value="Delivered" {{($project->status == 'Delivered') ? 'Selected' : ''}}>Delivered</option>
                                            </select>
                                        </td>
                                        <td>
                                            <a title="Show Project" data-route=""
                                                href="{{ route('projects.show', $project->id) }}"><i class="fas fa-eye"></i></a>
                                            &nbsp;&nbsp;

                                            <a title="Delete Project" data-route="{{ route('projects.delete', $project->id) }}"
                                                href="javascipt:void(0);" id="delete"><i class="fas fa-trash"></i></a>&nbsp;&nbsp;

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
                        "targets": [ 5, 6, 7]
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
    <script>
        $('#stuff_id').on('change', function() {
            var stuff_id = $(this).val();
            var project_id = $('#project_id').val();
            if (stuff_id == '') {
                toastr.error('Please select a stuff.')
            } else {
                swal({
                    title: "Are you sure?",
                    text: "To assign.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: '{{ route('projects.assign') }}',
                            data: {
                                'stuff_id': stuff_id,
                                'project_id' : project_id
                            },
                            success: function(resp) {
                                console.log(resp.success)
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
            }

        });
    </script>
    <script>
        $('#status').on('change', function() {
            var status = $(this).val();
            var project_id = $('#project_id').val();
            if (status == '') {
                toastr.error('Please select a stuff.')
            } else {
                swal({
                    title: "Are you sure?",
                    text: "To assign.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: '{{ route('projects.status') }}',
                            data: {
                                'project_id': project_id,
                                'status' : status
                            },
                            success: function(resp) {
                                console.log(resp.success)
                            }
                        });
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
            }

        });
    </script>
@endpush
