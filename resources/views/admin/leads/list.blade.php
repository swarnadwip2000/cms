@extends('admin.layouts.master')
@section('title')
    All Lead Details - {{ env('APP_NAME') }}
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
                        <h3 class="page-title">Leads Management</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('leads.index') }}">Leads</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('leads.create') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add a
                            Lead</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Leads Management</h4>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leads as $key => $lead)
                                    <tr>
                                        <td>#{{$lead->project_id}}</td>
                                        <td>{{ $lead->client_name }}</td>
                                        <td>{{ $lead->client_email }}</td>
                                        <td>{{ $lead->client_phone }}</td>
                                        <td>{{ $lead->client_address }}</td>
                                        <td>
                                            <select name="stuff_id" id="stuff_id" class="form-control">
                                                <option value="">Select a stuff</option>
                                                @foreach ($stuffs as $stuff)
                                                    <option value="{{ $stuff['id'] }}" data-id="{{$lead->id}}"
                                                        {{ $stuff['id'] == $lead['stuff_id'] ? 'selected' : '' }}>
                                                        {{ $stuff['name'] }} ({{ $stuff['email'] }})</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <a title="Edit Lead" data-route=""
                                                href="{{ route('leads.edit', $lead->id) }}"><i class="fas fa-edit"></i></a>
                                            &nbsp;&nbsp;

                                            <a title="Delete Lead" data-route="{{ route('leads.delete', $lead->id) }}"
                                                href="javascipt:void(0);" id="delete"><i class="fas fa-trash"></i></a>
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
                        "targets": [ 5, 6]
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
                    text: "To delete this lead.",
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
            var lead_id = $(this).data('id');
            if (stuff_id == '') {
                toastr.error('Please select a stuff.')
            }
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
                            url: '{{ route('leads.assign') }}',
                            data: {
                                'stuff_id': stuff_id,
                                'lead_id' : lead_id
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
        });
    </script>
@endpush
