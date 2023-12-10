@extends('user.layouts.master')
@section('title')
    All User Information Details - {{ env('APP_NAME') }}
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
                        {{-- <h3 class="page-title">User Information Management</h3> --}}
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user-projects.index') }}"><h3>User Information</h3></a></li>
                            {{-- <li class="breadcrumb-item active">List</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <h4 class="mb-0">Other Information</h4> --}}
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600;">Type of Application:-</span>{{$project['TypeofApplication'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Name:-</span>{{$project['FirstName'] ?? ''}} {{$project['LastName'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Email:-</span>{{$project['EnterEmail'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Phone Number:-</span>{{$project['EnterNumber'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Country of Residence:-</span>{{$project['CountryofResidence'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">State:-</span>{{$project['EnterState'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">City:-</span>{{$project['EnterCity'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Preferred Destination:-</span>{{$project['preferred_destination'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Pre-existing:-</span>{{$project['preexisting'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Date of Creation:-</span>{{$project['DateOfCreation'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">CRS Score:-</span>{{$project['CRSScore'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Category:-</span>{{$project['Category'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Any Visa Refusal ?:-</span>{{$project['AnyVisaRefusal'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Any Previous Travel History?:-</span>{{$project['AnyPreviousTravelHistory'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Have You Ever Owned Or Operated Your Own Business?:-</span>{{$project['HaveYouEverOwnedOrOperatedYourOwnBusiness'] ?? ''}}</p>

                            <p><span style="font-weight: 600;">Family and Friends in Canada?:-</span>{{$project['FamilyandFriendsinCanada'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Name:-</span>{{$project['selName'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Phone:-</span>{{$project['selPhone'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Email:-</span>{{$project['selEmail'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Relationships:-</span>{{$project['selRelationships'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Residency Status:-</span>{{$project['ResidencyStatus'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Povience:-</span>{{$project['eeProvince'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Note:-</span>{{$project['Note'] ?? ''}}</p>
                        </div>
                        <div class="col-md-6">

                            <p><span style="font-weight: 600;">Your Current Net Worth Bank Deposits Property and Other Assets? :-</span>{{$project['YourCurrentNetWorthBankDepositsPropertyandOtherAssets'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">English Exam:-</span>{{$project['EnglishExam'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Listening:-</span>{{$project['Listening'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Reading:-</span>{{$project['Reading'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Writing:-</span>{{$project['Writing'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Speaking:-</span>{{$project['Speaking'] ?? ''}}</p>

                            <p><span style="font-weight: 600;">Overall:-</span>{{$project['Overall'] ?? ''}}</p>

                            <p><span style="font-weight: 600;">French Exam:-</span>{{$project['frenchExam'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">French Listening:-</span>{{$project['FListening'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">French Reading:-</span>{{$project['FReading'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">French Writing:-</span>{{$project['FWriting'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">French Speaking:-</span>{{$project['FSpeaking'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">French Overall:-</span>{{$project['FOverall'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">OtherInformation:-</span>{{$project['OtherInformation'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Canadian work experience:-</span>{{$project['Canadianworkexperience'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Foreign work experience:-</span>{{$project['Foreignworkexperience'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Marital Status:-</span>{{$project['MaritalStatus'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Date Of Marriage:-</span>{{$project['DateOfMarriage'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Date Of Divorce:-</span>{{$project['DateOfDivorce'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Date Of Sepration:-</span>{{$project['DateOfSepration'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Dependent Children:-</span>{{$project['DependentChildren'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Years or younger:-</span>{{$project['Eyearsoryounger'] ?? ''}}</p>
                            <p><span style="font-weight: 600;">Twnniyears:-</span>{{$project['twnniyears'] ?? ''}}</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Canadian Work Experience</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Occupation</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                    <th>Province</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($project['canadianWorkExperience']) > 0)
                                @foreach ($project['canadianWorkExperience'] as $key => $item)
                                <tr>
                                    <td>{{$item->Occupation}}</td>
                                    <td>{{ $item->Type }}</td>
                                    <td>{{ $item->Status }}</td>
                                    <td>{{ $item->Cwduration }}</td>
                                    <td>
                                       {{ $item->Province }}
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Education History</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Duration</th>
                                    <th>Location</th>
                                    <th>Completed</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($project['educationHistory']) > 0)
                                @foreach ($project['educationHistory'] as $key => $education)
                                <tr>
                                    <td>{{$education->Field}}</td>
                                    <td>{{ $education->Duration }}</td>
                                    <td>{{ $education->Location }}</td>
                                    <td>{{ $education->Completed }}</td>
                                    <td>
                                       {{ $education->Level }}
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Foreign Work Experience</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Occupation</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                    <th>Province</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($project['foreignWorkExperience']) > 0)
                                @foreach ($project['foreignWorkExperience'] as $key => $item)
                                <tr>
                                    <td>{{$item->COccupation}}</td>
                                    <td>{{ $item->EType }}</td>
                                    <td>{{ $item->EStatus }}</td>
                                    <td>{{ $item->ECwduration }}</td>
                                    <td>
                                       {{ $item->EProvince }}
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Travel History</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($project['travelHistory']) > 0)
                                @foreach ($project['travelHistory'] as $key => $travel)
                                <tr>
                                    <td>{{$travel->SCountry}}</td>
                                    <td>{{ $travel->SYear }}</td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Visa Refusl</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($project['visaRefusals']) > 0)
                                @foreach ($project['visaRefusals'] as $key => $travel)
                                <tr>
                                    <td>{{$travel->Country}}</td>
                                    <td>{{ $travel->Year }}</td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No data found</td>
                            </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
@endpush
