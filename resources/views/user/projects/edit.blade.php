@extends('stuff.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Project Details
@endsection
@push('styles')
@endpush

@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Details</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('stuff-projects.index') }}">Projects</a></li>
                            <li class="breadcrumb-item active">Edit Project Details</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        {{-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_group"><i
                            class="fa fa-plus"></i> Add Project</a> --}}
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <h6 class="mb-0 text-uppercase">Edit A Project</h6>
                                <hr>
                                <div class="card border-0 border-4">
                                    <div class="card-body">
                                        <form action="{{ route('stuff-projects.update', $project->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="border p-4 rounded">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Client Name
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="client_name" id=""
                                                            class="form-control" value="{{ $project['client_name'] }}"
                                                            placeholder="Enter Client Name">
                                                        @if ($errors->has('client_name'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('client_name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Client Email
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="client_email" id=""
                                                            class="form-control" value="{{ $project['client_email'] }}"
                                                            placeholder="Enter Client Email">
                                                        @if ($errors->has('client_email'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('client_email') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Client Phone
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="client_phone" id=""
                                                            class="form-control" value="{{ $project['client_phone'] }}"
                                                            placeholder="Enter Client Phone Number">
                                                        @if ($errors->has('client_phone'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('client_phone') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Client
                                                            Address <span style="color: red;">*</span></label>
                                                        <input type="text" name="client_address" id=""
                                                            class="form-control" value="{{ $project['client_address'] }}"
                                                            placeholder="Client Address">
                                                        @if ($errors->has('client_address'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('client_address') }}</div>
                                                        @endif
                                                    </div>

                                                    {{-- <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Assign To
                                                            <span style="color: red;">*</span></label>
                                                        <select name="stuff_id" id="" class="form-control">
                                                            <option value="">Select a stuff</option>
                                                            @foreach ($stuffs as $stuff)
                                                                <option value="{{ $stuff['id'] }}"
                                                                    data-id="{{ $project->id }}"
                                                                    {{ $stuff['id'] == $project['stuff_id'] ? 'selected' : '' }}>
                                                                    {{ $stuff['name'] }} ({{ $stuff['email'] }})</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('stuff_id'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('stuff_id') }}</div>
                                                        @endif
                                                    </div> --}}
                                                    <div class="row" style="margin-top: 20px; float: left;">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn px-5 submit-btn">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')
@endpush
