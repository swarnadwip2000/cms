@extends('admin.layouts.master')
@section('title')
{{env('APP_NAME')}} | Edit User Details
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
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active">Edit User Details</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    {{-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_group"><i
                            class="fa fa-plus"></i> Add User</a> --}}
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <h6 class="mb-0 text-uppercase">Edit A User</h6>
                        <hr>
                        <div class="card border-0 border-4">
                            <div class="card-body">
                                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="border p-4 rounded">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Name <span style="color: red;">*</span></label>
                                                <input type="text" name="name" id="" class="form-control" value="{{ $user['name'] }}" placeholder="Enter User Name">
                                                @if($errors->has('name'))
                                                <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Email <span style="color: red;">*</span></label>
                                                <input type="text" name="email" id="" class="form-control" value="{{ $user['email'] }}" placeholder="Enter User Email">
                                                @if($errors->has('email'))
                                                <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Phone <span style="color: red;">*</span></label>
                                                <input type="text" name="phone" id="" class="form-control" value="{{ $user['phone'] }}" placeholder="Enter Phone Number">
                                                @if($errors->has('phone'))
                                                <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> City </label>
                                                <input type="text" name="city" id="" class="form-control" value="{{ $user['city'] }}" placeholder="City">
                                               
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Country </label>
                                                <input type="text" name="country" id="" class="form-control" value="{{ $user['country'] }}" placeholder="Country">
                                              
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Address <span style="color: red;">*</span></label>
                                                <input type="text" name="address" id="" class="form-control" value="{{ $user['address'] }}" placeholder="Address">
                                                @if($errors->has('address'))
                                                <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                                                @endif
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Password </label>
                                                <input type="password" name="password" id="" class="form-control"  placeholder="Enter pasword">
                                                @if($errors->has('password'))
                                                <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Confirm Password </label>
                                                <input type="password" name="confirm_password" id="" class="form-control" value="{{ $user['confirm_password'] }}">
                                                @if($errors->has('confirm_password'))
                                                <div class="error" style="color:red;">{{ $errors->first('confirm_password') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Pin Code <span style="color: red;">*</span></label>
                                                <input type="text" name="pincode" id="" class="form-control" value="{{ $user['pincode'] }}" placeholder="Pincode">
                                                @if($errors->has('pincode'))
                                                <div class="error" style="color:red;">{{ $errors->first('pincode') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Status <span style="color: red;">*</span></label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="">Select a Status</option>
                                                    <option value="1" @if($user['status'] == 1) selected="" @endif>Active</option>
                                                    <option value="0" @if($user['status'] == 0) selected="" @endif>Inactive</option>
                                                </select>
                                                @if($errors->has('status'))
                                                <div class="error" style="color:red;">{{ $errors->first('status') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Profile Picture </label>
                                                <input type="file" name="profile_picture" id="" class="form-control" value="{{ $user['profile_picture'] }}">
                                                @if($errors->has('profile_picture'))
                                                <div class="error" style="color:red;">{{ $errors->first('profile_picture') }}</div>
                                                @endif
                                            </div>
                                            @if($user['profile_picture'])
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label">View Profile Picture </label>
                                                <br>
                                               <img src="{{ Storage::url($user['profile_picture']) }}" alt="" class="img-design">
                                            </div>
                                            @endif
                                        <div class="row" style="margin-top: 20px; float: left;">
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn px-5 submit-btn">Update</button>
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