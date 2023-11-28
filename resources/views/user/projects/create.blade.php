@extends('user.layouts.master')
@section('title')
{{env('APP_NAME')}} | Create Project
@endsection
@push('styles')
@endpush

@section('content')
<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Create</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('user-projects.index') }}">Projects</a></li>
                        <li class="breadcrumb-item active">Create Project</li>
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
                        <h6 class="mb-0 text-uppercase">Create A Project</h6>
                        <hr>
                        <div class="card border-0 border-4">
                            <div class="card-body">
                                <form action="{{route('user-projects.create')}}" method="post"
                                            class="wpcf7-form init cf7mls-no-scroll cf7mls-auto-return-first-step cf7mls-no-moving-animation"
                                            aria-label="Contact form" novalidate="novalidate" data-status="init">
                                            <div style="display: none;">
                                                @csrf
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 co-lg-12">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Type of Application</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="TypeofApplication"><select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    name="TypeofApplication">
                                                                    <option value="Choose">Choose</option>
                                                                    <option value="Permanent Residency Or Express Entry">
                                                                        Permanent Residency Or Express Entry</option>
                                                                    <option value="Visitor">Visitor</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Work Permit">Work Permit</option>
                                                                    <option value="Business  Or Investor Class">Business Or
                                                                        Investor Class</option>
                                                                    <option value="Family Sponsorship">Family Sponsorship
                                                                    </option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="user">First Name</label><span
                                                                class="wpcf7-form-control-wrap" data-name="FirstName"><input
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="First Name" value="" type="text"
                                                                    name="FirstName"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="user">Last Name</label><span
                                                                class="wpcf7-form-control-wrap" data-name="LastName"><input
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Last Name" value="" type="text"
                                                                    name="LastName"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="phone">Phone</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="EnterNumber"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Enter Number" value="" type="tel"
                                                                    name="EnterNumber"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="email">Email</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="EnterEmail"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Enter Email" value="" type="email"
                                                                    name="EnterEmail"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Country of Residence</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="CountryofResidence"><select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    name="CountryofResidence">
                                                                    <option value="Choose Country">Choose Country</option>
                                                                    <option value="United States">United States</option>
                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                    <option value="Albania">Albania</option>
                                                                    <option value="Algeria">Algeria</option>
                                                                    <option value="American Samoa">American Samoa</option>
                                                                    <option value="Andorra">Andorra</option>
                                                                    <option value="Angola">Angola</option>
                                                                    <option value="Anguilla">Anguilla</option>
                                                                    <option value="Antigua and Barbuda">Antigua and Barbuda
                                                                    </option>
                                                                    <option value="Argentina">Argentina</option>
                                                                    <option value="Armenia">Armenia</option>
                                                                    <option value="Aruba">Aruba</option>
                                                                    <option value="Australia">Australia</option>
                                                                    <option value="Austria">Austria</option>
                                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                                    <option value="The Bahamas">The Bahamas</option>
                                                                    <option value="Bahrain">Bahrain</option>
                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                    <option value="Barbados">Barbados</option>
                                                                    <option value="Belarus">Belarus</option>
                                                                    <option value="Belgium">Belgium</option>
                                                                    <option value="Belize">Belize</option>
                                                                    <option value="Benin">Benin</option>
                                                                    <option value="Bermuda">Bermuda</option>
                                                                    <option value="Bhutan">Bhutan</option>
                                                                    <option value="Bolivia">Bolivia</option>
                                                                    <option value="Bosnia and Herzegovina">Bosnia and
                                                                        Herzegovina</option>
                                                                    <option value="Botswana">Botswana</option>
                                                                    <option value="Brazil">Brazil</option>
                                                                    <option value="Brunei">Brunei</option>
                                                                    <option value="Bulgaria">Bulgaria</option>
                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                    <option value="Burundi">Burundi</option>
                                                                    <option value="Cambodia">Cambodia</option>
                                                                    <option value="Cameroon">Cameroon</option>
                                                                    <option value="Canada">Canada</option>
                                                                    <option value="Cape Verde">Cape Verde</option>
                                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                                    <option value="Central African Republic">Central
                                                                        African Republic</option>
                                                                    <option value="Chad">Chad</option>
                                                                    <option value="Chile">Chile</option>
                                                                    <option value="China">China</option>
                                                                    <option value="Christmas Island">Christmas Island
                                                                    </option>
                                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                        Islands</option>
                                                                    <option value="Colombia">Colombia</option>
                                                                    <option value="Comoros">Comoros</option>
                                                                    <option value="Congo">Congo</option>
                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                    <option value="Croatia">Croatia</option>
                                                                    <option value="Cuba">Cuba</option>
                                                                    <option value="Cyprus">Cyprus</option>
                                                                    <option value="Czech Republic">Czech Republic</option>
                                                                    <option value="Democratic Republic of the Congo">
                                                                        Democratic Republic of the Congo</option>
                                                                    <option value="Denmark">Denmark</option>
                                                                    <option value="Djibouti">Djibouti</option>
                                                                    <option value="Dominica">Dominica</option>
                                                                    <option value="Dominican Republic">Dominican Republic
                                                                    </option>
                                                                    <option value="Ecuador">Ecuador</option>
                                                                    <option value="Egypt">Egypt</option>
                                                                    <option value="El Salvador">El Salvador</option>
                                                                    <option value="Equatorial Guinea">Equatorial Guinea
                                                                    </option>
                                                                    <option value="Eritrea">Eritrea</option>
                                                                    <option value="Estonia">Estonia</option>
                                                                    <option value="Ethiopia">Ethiopia</option>
                                                                    <option value="Falkland Islands">Falkland Islands
                                                                    </option>
                                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                                    <option value="Fiji">Fiji</option>
                                                                    <option value="Finland">Finland</option>
                                                                    <option value="France">France</option>
                                                                    <option value="French Polynesia">French Polynesia
                                                                    </option>
                                                                    <option value="Gabon">Gabon</option>
                                                                    <option value="The Gambia">The Gambia</option>
                                                                    <option value="Georgia">Georgia</option>
                                                                    <option value="Germany">Germany</option>
                                                                    <option value="Ghana">Ghana</option>
                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                    <option value="Greece">Greece</option>
                                                                    <option value="Greenland">Greenland</option>
                                                                    <option value="Grenada">Grenada</option>
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Guam">Guam</option>
                                                                    <option value="Guatemala">Guatemala</option>
                                                                    <option value="Guernsey">Guernsey</option>
                                                                    <option value="Guinea">Guinea</option>
                                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                    <option value="Guyana">Guyana</option>
                                                                    <option value="Haiti">Haiti</option>
                                                                    <option value="Honduras">Honduras</option>
                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                    <option value="Hungary">Hungary</option>
                                                                    <option value="Iceland">Iceland</option>
                                                                    <option value="India">India</option>
                                                                    <option value="Indonesia">Indonesia</option>
                                                                    <option value="Iran">Iran</option>
                                                                    <option value="Iraq">Iraq</option>
                                                                    <option value="Ireland">Ireland</option>
                                                                    <option value="Israel">Israel</option>
                                                                    <option value="Italy">Italy</option>
                                                                    <option value="Jamaica">Jamaica</option>
                                                                    <option value="Japan">Japan</option>
                                                                    <option value="Jersey">Jersey</option>
                                                                    <option value="Jordan">Jordan</option>
                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                    <option value="Kenya">Kenya</option>
                                                                    <option value="Kiribati">Kiribati</option>
                                                                    <option value="North Korea">North Korea</option>
                                                                    <option value="South Korea">South Korea</option>
                                                                    <option value="Kosovo">Kosovo</option>
                                                                    <option value="Kuwait">Kuwait</option>
                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                    <option value="Laos">Laos</option>
                                                                    <option value="Latvia">Latvia</option>
                                                                    <option value="Lebanon">Lebanon</option>
                                                                    <option value="Lesotho">Lesotho</option>
                                                                    <option value="Liberia">Liberia</option>
                                                                    <option value="Libya">Libya</option>
                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                    <option value="Lithuania">Lithuania</option>
                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                    <option value="Macau">Macau</option>
                                                                    <option value="Macedonia">Macedonia</option>
                                                                    <option value="Madagascar">Madagascar</option>
                                                                    <option value="Malawi">Malawi</option>
                                                                    <option value="Malaysia">Malaysia</option>
                                                                    <option value="Maldives">Maldives</option>
                                                                    <option value="Mali">Mali</option>
                                                                    <option value="Malta">Malta</option>
                                                                    <option value="Marshall Islands">Marshall Islands
                                                                    </option>
                                                                    <option value="Martinique">Martinique</option>
                                                                    <option value="Mauritania">Mauritania</option>
                                                                    <option value="Mauritius">Mauritius</option>
                                                                    <option value="Mayotte">Mayotte</option>
                                                                    <option value="Mexico">Mexico</option>
                                                                    <option value="Micronesia">Micronesia</option>
                                                                    <option value="Moldova">Moldova</option>
                                                                    <option value="Monaco">Monaco</option>
                                                                    <option value="Mongolia">Mongolia</option>
                                                                    <option value="Montenegro">Montenegro</option>
                                                                    <option value="Montserrat">Montserrat</option>
                                                                    <option value="Morocco">Morocco</option>
                                                                    <option value="Mozambique">Mozambique</option>
                                                                    <option value="Myanmar">Myanmar</option>
                                                                    <option value="Nagorno-Karabakh">Nagorno-Karabakh
                                                                    </option>
                                                                    <option value="Namibia">Namibia</option>
                                                                    <option value="Nauru">Nauru</option>
                                                                    <option value="Nepal">Nepal</option>
                                                                    <option value="Netherlands">Netherlands</option>
                                                                    <option value="Netherlands Antilles">Netherlands
                                                                        Antilles</option>
                                                                    <option value="New Caledonia">New Caledonia</option>
                                                                    <option value="New Zealand">New Zealand</option>
                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                    <option value="Niger">Niger</option>
                                                                    <option value="Nigeria">Nigeria</option>
                                                                    <option value="Niue">Niue</option>
                                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                                    <option value="Turkish Republic of Northern Cyprus">
                                                                        Turkish Republic of Northern Cyprus</option>
                                                                    <option value="Northern Mariana">Northern Mariana
                                                                    </option>
                                                                    <option value="Norway">Norway</option>
                                                                    <option value="Oman">Oman</option>
                                                                    <option value="Pakistan">Pakistan</option>
                                                                    <option value="Palau">Palau</option>
                                                                    <option value="Palestine">Palestine</option>
                                                                    <option value="Panama">Panama</option>
                                                                    <option value="Papua New Guinea">Papua New Guinea
                                                                    </option>
                                                                    <option value="Paraguay">Paraguay</option>
                                                                    <option value="Peru">Peru</option>
                                                                    <option value="Philippines">Philippines</option>
                                                                    <option value="Pitcairn Islands">Pitcairn Islands
                                                                    </option>
                                                                    <option value="Poland">Poland</option>
                                                                    <option value="Portugal">Portugal</option>
                                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                                    <option value="Qatar">Qatar</option>
                                                                    <option value="Republic of the Congo">Republic of the
                                                                        Congo</option>
                                                                    <option value="Romania">Romania</option>
                                                                    <option value="Russia">Russia</option>
                                                                    <option value="Rwanda">Rwanda</option>
                                                                    <option value="Saint Barthelemy">Saint Barthelemy
                                                                    </option>
                                                                    <option value="Saint Helena">Saint Helena</option>
                                                                    <option value="Saint Kitts and Nevis">Saint Kitts and
                                                                        Nevis</option>
                                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                                    <option value="Saint Martin">Saint Martin</option>
                                                                    <option value="Saint Pierre and Miquelon">Saint Pierre
                                                                        and Miquelon</option>
                                                                    <option value="Saint Vincent and the Grenadines">Saint
                                                                        Vincent and the Grenadines</option>
                                                                    <option value="Samoa">Samoa</option>
                                                                    <option value="San Marino">San Marino</option>
                                                                    <option value="Sao Tome and Principe">Sao Tome and
                                                                        Principe</option>
                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                    <option value="Senegal">Senegal</option>
                                                                    <option value="Serbia">Serbia</option>
                                                                    <option value="Seychelles">Seychelles</option>
                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                    <option value="Singapore">Singapore</option>
                                                                    <option value="Slovakia">Slovakia</option>
                                                                    <option value="Slovenia">Slovenia</option>
                                                                    <option value="Solomon Islands">Solomon Islands
                                                                    </option>
                                                                    <option value="Somalia">Somalia</option>
                                                                    <option value="Somaliland">Somaliland</option>
                                                                    <option value="South Africa">South Africa</option>
                                                                    <option value="South Ossetia">South Ossetia</option>
                                                                    <option value="South Sudan">South Sudan</option>
                                                                    <option value="Spain">Spain</option>
                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                    <option value="Sudan">Sudan</option>
                                                                    <option value="Suriname">Suriname</option>
                                                                    <option value="Svalbard">Svalbard</option>
                                                                    <option value="Swaziland">Swaziland</option>
                                                                    <option value="Sweden">Sweden</option>
                                                                    <option value="land&quot;>Switzerland">
                                                                        land"&gt;Switzerland</option>
                                                                    <option value="Syria">Syria</option>
                                                                    <option value="Taiwan">Taiwan</option>
                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                    <option value="Tanzania">Tanzania</option>
                                                                    <option value="Thailand">Thailand</option>
                                                                    <option value="Timor-Leste">Timor-Leste</option>
                                                                    <option value="Tokelau">Tokelau</option>
                                                                    <option value="Tonga">Tonga</option>
                                                                    <option value="Transnistria Pridnestrovie">Transnistria
                                                                        Pridnestrovie</option>
                                                                    <option value="Trinidad and Tobago">Trinidad and Tobago
                                                                    </option>
                                                                    <option value="Tristan da Cunha">Tristan da Cunha
                                                                    </option>
                                                                    <option value="Tunisia">Tunisia</option>
                                                                    <option value="Turkey">Turkey</option>
                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                    <option value="Turks and Caicos Islands">Turks and
                                                                        Caicos Islands</option>
                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                    <option value="Uganda">Uganda</option>
                                                                    <option value="Ukraine">Ukraine</option>
                                                                    <option value="United Arab Emirates">United Arab
                                                                        Emirates</option>
                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                    <option value="Uruguay">Uruguay</option>
                                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                                    <option value="opt Vanuatu">opt Vanuatu</option>
                                                                    <option value="Vatican City">Vatican City</option>
                                                                    <option value="Venezuela">Venezuela</option>
                                                                    <option value="Vietnam">Vietnam</option>
                                                                    <option value="British Virgin Islands">British Virgin
                                                                        Islands</option>
                                                                    <option value="Isle of Man">Isle of Man</option>
                                                                    <option value="US Virgin Islands">US Virgin Islands
                                                                    </option>
                                                                    <option value="Wallis and Futuna">Wallis and Futuna
                                                                    </option>
                                                                    <option value="Western Sahara">Western Sahara</option>
                                                                    <option value="Yemen">Yemen</option>
                                                                    <option value="Zambia">Zambia</option>
                                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="state">State</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="EnterState"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Enter State" value=""
                                                                    type="text" name="EnterState"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="city">City</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="EnterCity"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Enter City" value=""
                                                                    type="text" name="EnterCity"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Preferred destination in
                                                                Canada?</label><span class="wpcf7-form-control-wrap"
                                                                data-name="Select"><select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                    aria-required="true" aria-invalid="false"
                                                                    name="Select">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Alberta">Alberta</option>
                                                                    <option value="British Columbia">British Columbia
                                                                    </option>
                                                                    <option value="Manitoba">Manitoba</option>
                                                                    <option value="New Brunswick">New Brunswick</option>
                                                                    <option value="Newfoundland">Newfoundland</option>
                                                                    <option value="Northwest Territories">Northwest
                                                                        Territories</option>
                                                                    <option value="Nova Scotia">Nova Scotia</option>
                                                                    <option value="Nunavut">Nunavut</option>
                                                                    <option value="Ontario">Ontario</option>
                                                                    <option value="Prince Edward Island">Prince Edward
                                                                        Island</option>
                                                                    <option value="Quebec  Saskatchewan">Quebec
                                                                        Saskatchewan</option>
                                                                    <option value="Yukon">Yukon</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="input_1_35">Pre-existing Express Entry
                                                                Profile?</label><span class="wpcf7-form-control-wrap"
                                                                data-name="Select"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    id="expressEntry" aria-invalid="false"
                                                                    name="Select">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="preexisting">
                                                <div class="col-md-4">
                                                    <div class="form-group ">
                                                        <p><label for="input_1_35">Date Of Creation</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="DateOfCreation"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Creation"
                                                                    type="date" name="DateOfCreation"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p><label for="input_1_35">CRS Score</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="CRSScore"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text form-control"
                                                                    aria-invalid="false" placeholder="CRS Score"
                                                                    value="" type="text" name="CRSScore"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p><label for="input_1_35">Category</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="Category"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    aria-invalid="false" name="Category">
                                                                    <option value="Choose">Choose</option>
                                                                    <option value="Federal Skilled Worker">Federal Skilled
                                                                        Worker</option>
                                                                    <option value="Federal skilled Trade">Federal skilled
                                                                        Trade</option>
                                                                    <option value="Canadian Experience Class">Canadian
                                                                        Experience Class</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Any Visa Refusal
                                            </h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group first-cl">
                                                        <p><label for="sel1">Any Visa Refusal?</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="AnyVisaRefusal"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    aria-invalid="false" name="AnyVisaRefusal">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inc2" id="visashow">
                                                <div class="row first-cl-div" id="visaRefusal__wrapper">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Country</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Country"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Country"
                                                                        value="" type="text"
                                                                        name="Country"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Year</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Year"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Year"
                                                                        value="" type="text"
                                                                        name="Year"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><button style="margin-top: 25px; width: 100%;"
                                                                    class="btn btn-danger btnForVisaRefusal"
                                                                    type="button" id="appendrefusal"
                                                                    name="appendrefusal">Add More</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Any Previous Travel History
                                            </h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group first-cl2">
                                                        <p><label for="sel1">Any Previous Travel History ?</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="AnyPreviousTravelHistory"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    id="PreviousTravel" aria-invalid="false"
                                                                    name="AnyPreviousTravelHistory">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inc3" id="travel_history_show">
                                                <div class="row first-cl-div2" id="travelHistory__wrapper">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Country</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="SCountry"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Country"
                                                                        value="" type="text"
                                                                        name="SCountry"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Year</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="SYear"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Year"
                                                                        value="" type="text"
                                                                        name="SYear"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><button style="margin-top: 25px; width: 100%;"
                                                                    class="btn btn-danger add-classa" type="button"
                                                                    id="travelhistory" name="travelhistory">Add
                                                                    More</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidebusiness">
                                                <h3>Business Information
                                                </h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Have You Ever Owned Or Operated Your
                                                                    Own Business?</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="HaveYouEverOwnedOrOperatedYourOwnBusiness"><select
                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        name="HaveYouEverOwnedOrOperatedYourOwnBusiness">
                                                                        <option value="">—Please choose an option—
                                                                        </option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Your Current Net Worth (Bank Deposits,
                                                                    Property, and Other Assets)</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="YourCurrentNetWorthBankDepositsPropertyandOtherAssets"><input
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Your Current Net Worth (Bank Deposits, Property, and Other Assets)"
                                                                        value="" type="text"
                                                                        name="YourCurrentNetWorthBankDepositsPropertyandOtherAssets"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidevisitor">
                                                <h3>Language Skills
                                                </h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p><label for="sel1">English Exam?</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="EnglishExam"><select
                                                                        class="wpcf7-form-control wpcf7-select form-control"
                                                                        id="englishExam__select" aria-invalid="false"
                                                                        name="EnglishExam">
                                                                        <option value="Select">Select</option>
                                                                        <option value="IELTS">IELTS</option>
                                                                        <option value="CELPIP">CELPIP</option>
                                                                        <option value="None">None</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="english">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Listening</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Listening"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Listening"
                                                                        value="" type="text"
                                                                        name="Listening"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Reading</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Reading"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Reading"
                                                                        value="" type="text"
                                                                        name="Reading"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Writing</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Writing"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Writing"
                                                                        value="" type="text"
                                                                        name="Writing"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Speaking</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Speaking"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Speaking"
                                                                        value="" type="text"
                                                                        name="Speaking"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Overall</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Overall"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Overall"
                                                                        value="" type="text"
                                                                        name="Overall"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p><label for="sel1">French Exam?</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="frenchExam"><select
                                                                        class="wpcf7-form-control wpcf7-select form-control"
                                                                        id="frenchExams" aria-invalid="false"
                                                                        name="frenchExam">
                                                                        <option value="Select">Select</option>
                                                                        <option value="TEF">TEF</option>
                                                                        <option value="None">None</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="french">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Listening</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="FListening"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Listening"
                                                                        value="" type="text"
                                                                        name="FListening"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Reading</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="FReading"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Reading"
                                                                        value="" type="text"
                                                                        name="FReading"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Writing</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="FWriting"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Writing"
                                                                        value="" type="text"
                                                                        name="FWriting"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Speaking</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="FSpeaking"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Speaking"
                                                                        value="" type="text"
                                                                        name="FSpeaking"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <p><label for="input_1_35">Overall</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="FOverall"><input size="40"
                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                        aria-invalid="false" placeholder="Overall"
                                                                        value="" type="text"
                                                                        name="FOverall"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Education and Training
                                            </h3>
                                            <hr>
                                            <p><strong>Education History</strong>
                                            </p>
                                            <div class="inc4">
                                                <div class="row educationAndTraining" id="educationAndTraining">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Level</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Level"><select
                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        name="Level">
                                                                        <option value="Choose Level">Choose Level</option>
                                                                        <option value="Ph. D">Ph. D</option>
                                                                        <option value="Masters">Masters</option>
                                                                        <option value="Bachelors Diploma or Certificate">
                                                                            Bachelors Diploma or Certificate</option>
                                                                        <option value="Trade Certificate">Trade Certificate
                                                                        </option>
                                                                        <option value="Apprenticeship">Apprenticeship
                                                                        </option>
                                                                        <option value="Other">Other</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><label for="field">Field</label><span
                                                                    class="wpcf7-form-control-wrap" data-name="Field">
                                                                    <textarea cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false"
                                                                        placeholder="Field" name="Field"></textarea>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Duration</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Duration"><select
                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        name="Duration">
                                                                        <option value="Choose Duration">Choose Duration
                                                                        </option>
                                                                        <option value="Less than 6 months">Less than 6
                                                                            months</option>
                                                                        <option value="6 months to 1 year">6 months to 1
                                                                            year</option>
                                                                        <option value="1 - 2 years">1 - 2 years</option>
                                                                        <option value="2 - 3 years">2 - 3 years</option>
                                                                        <option value="3 - 4 years">3 - 4 years</option>
                                                                        <option value="4 years or more">4 years or more
                                                                        </option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Location</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Location"><select
                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        name="Location">
                                                                        <option value="Choose Location">Choose Location
                                                                        </option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="USA">USA</option>
                                                                        <option value="Other">Other</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Completed?</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Completed"><select
                                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        name="Completed">
                                                                        <option value="Choose">Choose</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                        <option value="Pursuing">Pursuing</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <p><button style="margin-top: 25px; width: 100%;"
                                                                    class="btn btn-danger educationappend" type="button"
                                                                    class="" name="educationappend">Add
                                                                    More</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="educationother">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Other Information</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="OtherInformation"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text form-control"
                                                                    aria-invalid="false" placeholder="Other Information"
                                                                    value="" type="text"
                                                                    name="OtherInformation"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Work Experience
                                            </h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group first-cl3">
                                                        <p><label class="gfield_label" for="input_1_70">Canadian work
                                                                experience?</label><span class="wpcf7-form-control-wrap"
                                                                data-name="Canadianworkexperience"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    id="workExperience" aria-invalid="false"
                                                                    name="Canadianworkexperience">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="canadian">
                                                <div id="first-cl-div3" class="inc first-cl-div3">
                                                    <div class="row" id="workExperience__wrapper">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Occupation</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="Occupation"><input size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                                            aria-invalid="false" placeholder="Occupation"
                                                                            value="" type="text"
                                                                            name="Occupation"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Type</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="Type"><select
                                                                            class="wpcf7-form-control wpcf7-select form-control"
                                                                            aria-invalid="false" name="Type">
                                                                            <option value="">—Please choose an
                                                                                option—</option>
                                                                            <option value="Employee">Employee</option>
                                                                            <option value="Self-Employed">Self-Employed
                                                                            </option>
                                                                            <option value="Contract">Contract</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Status</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="Status"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="Status">
                                                                            <option value="Full Time">Full Time</option>
                                                                            <option value="Part Time">Part Time</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Duration</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="Duration"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="Duration">
                                                                            <option value="Less than 1 year">Less than 1
                                                                                year</option>
                                                                            <option value="1-2 year">1-2 year</option>
                                                                            <option value="2-3 year">2-3 year</option>
                                                                            <option value="3-4 year">3-4 year</option>
                                                                            <option value="4-5 year">4-5 year</option>
                                                                            <option value="More than 5 year">More than 5
                                                                                year</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Province</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="Province"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="Province">
                                                                            <option value="Select">Select</option>
                                                                            <option value="Alberta">Alberta</option>
                                                                            <option value="British Columbia">British
                                                                                Columbia</option>
                                                                            <option value="Manitoba">Manitoba</option>
                                                                            <option value="New Brunswick">New Brunswick
                                                                            </option>
                                                                            <option value="Newfoundland">Newfoundland
                                                                            </option>
                                                                            <option value="Northwest Territories">Northwest
                                                                                Territories</option>
                                                                            <option value="Nova Scotia">Nova Scotia
                                                                            </option>
                                                                            <option value="Nunavut">Nunavut</option>
                                                                            <option value="Ontario">Ontario</option>
                                                                            <option value="Prince Edward Island">Prince
                                                                                Edward Island</option>
                                                                            <option value="Quebec  Saskatchewan">Quebec
                                                                                Saskatchewan</option>
                                                                            <option value="Yukon">Yukon</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><button style="margin-top: 25px; width: 100%;"
                                                                        class="btn btn-danger work_experience_add_more"
                                                                        type="button" id="append" name="append">Add
                                                                        More</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Foreign work experience?</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="Foreignworkexperience"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    id="foreignWork" aria-invalid="false"
                                                                    name="Foreignworkexperience">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="foreign">
                                                <div class="inc5">
                                                    <div class="row" id="foreign__wrapper">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Occupation</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="COccupation"><input size="40"
                                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                                            aria-invalid="false" placeholder="Occupation"
                                                                            value="" type="text"
                                                                            name="COccupation"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Type</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="EType"><select
                                                                            class="wpcf7-form-control wpcf7-select form-control"
                                                                            aria-invalid="false" name="EType">
                                                                            <option value="Employee">Employee</option>
                                                                            <option value="Self-Employed">Self-Employed
                                                                            </option>
                                                                            <option value="Contract">Contract</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Status</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="EStatus"><select
                                                                            class="wpcf7-form-control wpcf7-select form-control"
                                                                            aria-invalid="false" name="EStatus">
                                                                            <option value="Full Time">Full Time</option>
                                                                            <option value="Part Time">Part Time</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Duration</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="EDuration"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="EDuration">
                                                                            <option value="Less than 1 year">Less than 1
                                                                                year</option>
                                                                            <option value="1-2 year">1-2 year</option>
                                                                            <option value="2-3 year">2-3 year</option>
                                                                            <option value="3-4 year">3-4 year</option>
                                                                            <option value="4-5 year">4-5 year</option>
                                                                            <option value="More than 5 year">More than 5
                                                                                year</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><label class="gfield_label"
                                                                        for="input_1_70">Province</label><span
                                                                        class="wpcf7-form-control-wrap"
                                                                        data-name="EProvince"><select
                                                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            name="EProvince">
                                                                            <option value="Select">Select</option>
                                                                            <option value="Alberta">Alberta</option>
                                                                            <option value="British Columbia">British
                                                                                Columbia</option>
                                                                            <option value="Manitoba">Manitoba</option>
                                                                            <option value="New Brunswick">New Brunswick
                                                                            </option>
                                                                            <option value="Newfoundland">Newfoundland
                                                                            </option>
                                                                            <option value="Northwest Territories">
                                                                                Northwest Territories</option>
                                                                            <option value="Nova Scotia">Nova Scotia
                                                                            </option>
                                                                            <option value="Nunavut">Nunavut</option>
                                                                            <option value="Ontario">Ontario</option>
                                                                            <option value="Prince Edward Island">Prince
                                                                                Edward Island</option>
                                                                            <option value="Quebec  Saskatchewan">Quebec
                                                                                Saskatchewan</option>
                                                                            <option value="Yukon">Yukon</option>
                                                                        </select></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <p><button style="margin-top: 25px; width: 100%;"
                                                                        class="btn btn-danger foreignappend" type="button"
                                                                        id="foreignappend" name="foreignappend">Add
                                                                        More</button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Marital Status
                                            </h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Marital Status</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="MaritalStatus"><select
                                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                                    id="married__selector" aria-required="true"
                                                                    aria-invalid="false" name="MaritalStatus">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Never Married">Never Married</option>
                                                                    <option
                                                                        value="Married or in a Common-Law Relationship">
                                                                        Married or in a Common-Law Relationship</option>
                                                                    <option value="Separated">Separated</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row " id="divorce">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Date Of Marriage</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="DateOfMarriage"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Marriage"
                                                                    type="date" name="DateOfMarriage"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Date Of Divorce</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="DateOfDivorce"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Divorce"
                                                                    type="date" name="DateOfDivorce"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row " id="seprated">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Date Of Marriage</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="CDateOfMarriage"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Marriage"
                                                                    type="date" name="CDateOfMarriage"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Date Of Sepration</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="DateOfSepration"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Sepration"
                                                                    type="date" name="DateOfSepration"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row " id="married">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Date Of Marriage</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="EDateOfMarriage"><input
                                                                    class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control"
                                                                    aria-invalid="false" value="Date Of Marriage"
                                                                    type="date" name="EDateOfMarriage"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="nevermarried">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p><label for="sel1">Dependent Children</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="DependentChildren"><select
                                                                        class="wpcf7-form-control wpcf7-select form-control"
                                                                        id="dependentChildren" aria-invalid="false"
                                                                        name="DependentChildren">
                                                                        <option value="Select">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row " id="nevermarriedyes">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p><label for="sel1">12 years or younger</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="Eyearsoryounger"><select
                                                                        class="wpcf7-form-control wpcf7-select form-control"
                                                                        aria-invalid="false" name="Eyearsoryounger">
                                                                        <option value="None">None</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5 or More">5 or More</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p><label for="sel1">12-19 years</label><span
                                                                    class="wpcf7-form-control-wrap"
                                                                    data-name="twnniyears"><select
                                                                        class="wpcf7-form-control wpcf7-select form-control"
                                                                        aria-invalid="false" name="twnniyears">
                                                                        <option value="None">None</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5 or More">5 or More</option>
                                                                    </select></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Family and Friends in
                                                                Canada?</label><span class="wpcf7-form-control-wrap"
                                                                data-name="FamilyandFriendsinCanada"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    id="familyAndFriends" aria-invalid="false"
                                                                    name="FamilyandFriendsinCanada">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row " id="family">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Name</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="selName"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-text form-control"
                                                                    aria-invalid="false" placeholder="Name"
                                                                    value="" type="text"
                                                                    name="selName"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Phone</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="selPhone"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel form-control"
                                                                    aria-invalid="false" placeholder="Phone"
                                                                    value="" type="tel"
                                                                    name="selPhone"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Email</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="selEmail"><input size="40"
                                                                    class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email form-control"
                                                                    aria-invalid="false" placeholder="Email"
                                                                    value="" type="email"
                                                                    name="selEmail"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Relationships</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="selRelationships"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    aria-invalid="false" name="selRelationships">
                                                                    <option value="Parent">Parent</option>
                                                                    <option value="Grand Parent">Grand Parent</option>
                                                                    <option value="Spouse">Spouse</option>
                                                                    <option value="Sibling">Sibling</option>
                                                                    <option value="Cousin/Nephew/Niece">
                                                                        Cousin/Nephew/Niece</option>
                                                                    <option value="Son/Daughter">Son/Daughter</option>
                                                                    <option value="Friend">Friend</option>
                                                                    <option value="Other">Other</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Residency Status</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="ResidencyStatus"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    aria-invalid="false" name="ResidencyStatus">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Citizen">Citizen</option>
                                                                    <option value="Permanent Resident">Permanent Resident
                                                                    </option>
                                                                    <option value="Other">Other</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p><label for="sel1">Province</label><span
                                                                class="wpcf7-form-control-wrap"
                                                                data-name="eeProvince"><select
                                                                    class="wpcf7-form-control wpcf7-select form-control"
                                                                    aria-invalid="false" name="eeProvince">
                                                                    <option value="Select">Select</option>
                                                                    <option value="Alberta">Alberta</option>
                                                                    <option value="British Columbia">British Columbia
                                                                    </option>
                                                                    <option value="Manitoba">Manitoba</option>
                                                                    <option value="New Brunswick">New Brunswick</option>
                                                                    <option value="Newfoundland">Newfoundland</option>
                                                                    <option value="Northwest Territories">Northwest
                                                                        Territories</option>
                                                                    <option value="Nova Scotia">Nova Scotia</option>
                                                                    <option value="Nunavut">Nunavut</option>
                                                                    <option value="Ontario">Ontario</option>
                                                                    <option value="Prince Edward Island">Prince Edward
                                                                        Island</option>
                                                                    <option value="Quebec  Saskatchewan">Quebec
                                                                        Saskatchewan</option>
                                                                    <option value="Yukon">Yukon</option>
                                                                </select></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <p><label for="comment">Note</label><span
                                                                class="wpcf7-form-control-wrap" data-name="Note">
                                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control"
                                                                    aria-invalid="false" placeholder="Note" name="Note"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="btn-group btn-group-lg submit-btn">
                                                        <p><input
                                                                class="wpcf7-form-control wpcf7-submit has-spinner btn btn-default mt-10"
                                                                type="submit" value="Submit">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
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
<script>
    $(document).ready(function() {
        $('.educationappend').click(function() {

            $('.inc4').append(
                `<div class="row educationAndTraining"><div class="col-md-2"><div class="form-group"><p><label for="sel1">Level</label><span class="wpcf7-form-control-wrap"data-name="Level"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"aria-required="true" aria-invalid="false"name="Level"><option value="Choose Level">Choose Level</option><option value="Ph. D">Ph. D</option><option value="Masters">Masters</option><option value="Bachelors Diploma or Certificate">Bachelors Diploma or Certificate</option><option value="Trade Certificate">Trade Certificate</option><option value="Apprenticeship">Apprenticeship</option><option value="Other">Other</option></select></span></p></div></div><div class="col-md-2"><div class="form-group"><p><label for="field">Field</label><spanclass="wpcf7-form-control-wrap" data-name="Field"><textarea cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false"placeholder="Field" name="Field"></textarea></span></p></div></div><div class="col-md-2"><div class="form-group"><p><label for="sel1">Duration</label><span class="wpcf7-form-control-wrap"data-name="Duration"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"aria-required="true" aria-invalid="false"name="Duration"><option value="Choose Duration">Choose Duration</option><option value="Less than 6 months">Less than 6months</option><option value="6 months to 1 year">6 months to 1year</option><option value="1 - 2 years">1 - 2 years</option><option value="2 - 3 years">2 - 3 years</option><option value="3 - 4 years">3 - 4 years</option><option value="4 years or more">4 years or more</option></select></span></p></div></div><div class="col-md-2"><div class="form-group"><p><label for="sel1">Location</label><spanclass="wpcf7-form-control-wrap"data-name="Location"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"aria-required="true" aria-invalid="false"name="Location"><option value="Choose Location">Choose Location</option><option value="Canada">Canada</option><option value="USA">USA</option><option value="Other">Other</option></select></span></p></div></div><div class="col-md-2"><div class="form-group"><p><label for="sel1">Completed?</label><spanclass="wpcf7-form-control-wrap"data-name="Completed"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"aria-required="true" aria-invalid="false"name="Completed"><option value="Choose">Choose</option><option value="Yes">Yes</option><option value="No">No</option><option value="Pursuing">Pursuing</option></select></span></p></div></div><div class="col-md-2"><div class="form-group"><p><button style="margin-top: 25px; width: 100%;" class="remove_field btn btn-danger" type="button"  name="educationappend">Remove</button></p></div></div></div>`
            );

        });

        $(document).on("click", ".remove_field", function(e) {
            e.preventDefault();
            $(this).closest('.educationAndTraining').remove();
        });
    });
</script>
<script>
    // btnForVisaRefusal
    $(document).ready(function() {
        $('.btnForVisaRefusal').click(function() {
            $('.inc2').append(
                `<div class="row first-cl-div" id="visaRefusal__wrapper"> <div class="col-md-5"> <div class="form-group"> <p><label for="sel1">Country</label><span class="wpcf7-form-control-wrap" data-name="Country"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Country" value="" type="text" name="Country"></span> </p> </div> </div> <div class="col-md-5"> <div class="form-group"> <p><label for="sel1">Year</label><span class="wpcf7-form-control-wrap" data-name="Year"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Year" value="" type="text" name="Year"></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><button style="margin-top: 25px; width: 100%;" class="btn btn-danger remove-btn1" type="button" id="appendrefusal" name="appendrefusal">Remove</button> </p> </div> </div> </div>`
                );
        })
        $(document).on("click", ".remove-btn1", function(e) {
            e.preventDefault();
            $(this).closest('.first-cl-div').remove();
        });
    });
</script>

<script>
    // btnForVisaRefusal
    $(document).ready(function() {
        $('.add-classa').click(function() {
            $('.inc3').append(
                `<div class="row first-cl-div2" id="travelHistory__wrapper"> <div class="col-md-5"> <div class="form-group"> <p><label for="sel1">Country</label><span class="wpcf7-form-control-wrap" data-name="Country"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Country" value="" type="text" name="Country"></span> </p> </div> </div> <div class="col-md-5"> <div class="form-group"> <p><label for="sel1">Year</label><span class="wpcf7-form-control-wrap" data-name="Year"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Year" value="" type="text" name="Year"></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><button style="margin-top: 25px; width: 100%;" class="btn btn-danger remove-btn2" type="button" id="appendrefusal" name="appendrefusal">Remove</button> </p> </div> </div> </div>`
                );
        })
        $(document).on("click", ".remove-btn2", function(e) {
            e.preventDefault();
            $(this).closest('.first-cl-div2').remove();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.work_experience_add_more').on('click', function() {
            $('.inc').append(
                `<div class="row workExperience" id="workExperience__wrapper"> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Occupation</label><span class="wpcf7-form-control-wrap" data-name="Occupation"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Occupation" value="" type="text" name="Occupation"></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Type</label><span class="wpcf7-form-control-wrap" data-name="Type"><select class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false" name="Type"> <option value="">—Please choose an option—</option> <option value="Employee">Employee</option> <option value="Self-Employed">Self-Employed </option> <option value="Contract">Contract</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Status</label><span class="wpcf7-form-control-wrap" data-name="Status"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="Status"> <option value="Full Time">Full Time</option> <option value="Part Time">Part Time</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Duration</label><span class="wpcf7-form-control-wrap" data-name="Duration"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="Duration"> <option value="Less than 1 year">Less than 1 year</option> <option value="1-2 year">1-2 year</option> <option value="2-3 year">2-3 year</option> <option value="3-4 year">3-4 year</option> <option value="4-5 year">4-5 year</option> <option value="More than 5 year">More than 5 year</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Province</label><span class="wpcf7-form-control-wrap" data-name="Province"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="Province"> <option value="Select">Select</option> <option value="Alberta">Alberta</option> <option value="British Columbia">British Columbia</option> <option value="Manitoba">Manitoba</option> <option value="New Brunswick">New Brunswick </option> <option value="Newfoundland">Newfoundland </option> <option value="Northwest Territories">Northwest Territories</option> <option value="Nova Scotia">Nova Scotia </option> <option value="Nunavut">Nunavut</option> <option value="Ontario">Ontario</option> <option value="Prince Edward Island">Prince Edward Island</option> <option value="Quebec  Saskatchewan">Quebec Saskatchewan</option> <option value="Yukon">Yukon</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><button style="margin-top: 25px; width: 100%;" class="btn btn-danger remove-btn3" type="button" id="append" name="append">Remove</button> </p> </div> </div> </div>`
                );
        });

        $(document).on("click", ".remove-btn3", function(e) {
            e.preventDefault();
            $(this).closest('.workExperience').remove();
        });
    });
</script>

<script>
     $(document).ready(function() {
        $('.foreignappend').on('click', function() {
            $('.inc5').append(
                `<div class="row foreign" id="foreign__wrapper"> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Occupation</label><span class="wpcf7-form-control-wrap" data-name="COccupation"><input size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Occupation" value="" type="text" name="COccupation"></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Type</label><span class="wpcf7-form-control-wrap" data-name="EType"><select class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false" name="EType"> <option value="Employee">Employee</option> <option value="Self-Employed">Self-Employed </option> <option value="Contract">Contract</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Status</label><span class="wpcf7-form-control-wrap" data-name="EStatus"><select class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false" name="EStatus"> <option value="Full Time">Full Time</option> <option value="Part Time">Part Time</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Duration</label><span class="wpcf7-form-control-wrap" data-name="EDuration"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="EDuration"> <option value="Less than 1 year">Less than 1 year</option> <option value="1-2 year">1-2 year</option> <option value="2-3 year">2-3 year</option> <option value="3-4 year">3-4 year</option> <option value="4-5 year">4-5 year</option> <option value="More than 5 year">More than 5 year</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><label class="gfield_label" for="input_1_70">Province</label><span class="wpcf7-form-control-wrap" data-name="EProvince"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" name="EProvince"> <option value="Select">Select</option> <option value="Alberta">Alberta</option> <option value="British Columbia">British Columbia</option> <option value="Manitoba">Manitoba</option> <option value="New Brunswick">New Brunswick </option> <option value="Newfoundland">Newfoundland </option> <option value="Northwest Territories"> Northwest Territories</option> <option value="Nova Scotia">Nova Scotia </option> <option value="Nunavut">Nunavut</option> <option value="Ontario">Ontario</option> <option value="Prince Edward Island">Prince Edward Island</option> <option value="Quebec  Saskatchewan">Quebec Saskatchewan</option> <option value="Yukon">Yukon</option> </select></span> </p> </div> </div> <div class="col-md-2"> <div class="form-group"> <p><button style="margin-top: 25px; width: 100%;" class="btn btn-danger remove-btn4" type="button" id="foreignappend" name="foreignappend">Remove</button> </p> </div> </div> </div>`
                );
        });

        $(document).on("click", ".remove-btn4", function(e) {
            e.preventDefault();
            $(this).closest('.foreign').remove();
        });

    })
</script>

<script>
    $(document).ready(function() {
        $('#foreignWork').on('change', function() {
            if (this.value == 'Yes') {
                $("#foreign").show();
            } else {
                $("#foreign").hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#dependentChildren').on('change', function() {
            if (this.value == 'Yes') {
                $("#nevermarriedyes").show();
            } else {
                $("#nevermarriedyes").hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#familyAndFriends').on('change', function() {
            if (this.value == 'Yes') {
                $("#family").show();
            } else {
                $("#family").hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#btnForVisaRefusal').on('change', function() {
            if (this.value == 'Yes') {
                $("#visaRefusal").show();
            } else {
                $("#visaRefusal").hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#btnForTravelHistory').on('change', function() {
            if (this.value == 'Yes') {
                $("#travelHistory").show();
            } else {
                $("#travelHistory").hide();
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#btnForMedicalCondition').on('change', function() {
            if (this.value == 'Yes') {
                $("#medicalCondition").show();
            } else {
                $("#medicalCondition").hide();
            }
        });
    });
</script>

@endpush
