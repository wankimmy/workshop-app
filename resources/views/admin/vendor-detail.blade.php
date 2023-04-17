@extends('layouts.app')
@section('content')

 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Vendor Detail
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/vendors') }}"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item active">Vendor Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{$Vendors->vendors_company}}</h5>
                </div>
                <div class="card-body">
                    <div class="dashboard-detail">
                                   
                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_pic_name">PIC Name</label>
                                                <input type="text" class="form-control" id="vendors_pic_name" name="vendors_pic_name" placeholder="Person in charge name" value="{{$Vendors->vendors_pic_name }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_ic">IC / Passport No</label>
                                                <input type="text" class="form-control" id="vendors_ic" name="vendors_ic" placeholder="IC or passport no" value="{{$Vendors->vendors_ic}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_company">Company Name</label>
                                                <input type="text" class="form-control" id="vendors_company" name="vendors_company" placeholder="Company Name" value="{{$Vendors->vendors_company }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_ssm">Company SSM</label>
                                                <input type="text" class="form-control" id="vendors_ssm" name="vendors_ssm" placeholder="Company SSM" value="{{$Vendors->vendors_ssm}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_email">Company Email</label>
                                                <input type="text" class="form-control" id="vendors_email" name="vendors_email" placeholder="Company Email" value="{{$Vendors->vendors_email}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_logo"><b>Company Logo</b></label><br>
                                                <img src="{{env('APP_URL')}}/uploads/vendors/{{$Vendors->vendors_logo}}" alt="" class="img-fluid"><br>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_address">Company Address</label>
                                                <input type="text" class="form-control" id="vendors_address" name="vendors_address" placeholder="Company Address" value="{{$Vendors->vendors_address}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_city">City</label>
                                                <input type="text" class="form-control" id="vendors_city" name="vendors_city" placeholder="City" value="{{$Vendors->vendors_city}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_state">State</label>
                                                <input type="text" class="form-control" id="vendors_state" name="vendors_state" placeholder="State" value="{{$Vendors->vendors_state}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_postcode">Postcode</label>
                                                <input type="text" class="form-control" id="vendors_postcode" name="vendors_postcode" placeholder="Postcode" value="{{$Vendors->vendors_postcode}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_country">Country</label>
                                                <input type="text" class="form-control" id="vendors_country" name="vendors_country" placeholder="Country" value="{{$Vendors->vendors_country}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_phone ">Company Phone No</label>
                                                <input type="text" class="form-control" id="vendors_phone" name="vendors_phone" placeholder="Phone No" value="{{$Vendors->vendors_phone}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_fb">Company Facebook</label>
                                                <input type="text" class="form-control" id="vendors_fb" name="vendors_fb" placeholder="Facebook URL" value="{{$Vendors->vendors_fb}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_twitter">Company Twitter</label>
                                                <input type="text" class="form-control" id="vendors_twitter" name="vendors_twitter" placeholder="Twitter URL" value="{{$Vendors->vendors_twitter}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_ig">Company Instagram</label>
                                                <input type="text" class="form-control" id="vendors_ig" name="vendors_ig" placeholder="Instagram URL" value="{{$Vendors->vendors_ig}}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="vendors_youtube">Company Youtube</label>
                                                <input type="text" class="form-control" id="vendors_youtube" name="vendors_youtube" placeholder="Youtube URL" value="{{$Vendors->vendors_youtube}}"readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_categories">Categories</label>
                                                <select class="form-control" id="vendors_categories" name="vendors_categories"  readonly>
                                                    <option value="1" {{ $Vendors->vendors_categories == '1' ? 'selected' : '' }}>Caterers</option>
                                                    <option value="2" {{ $Vendors->vendors_categories == '2' ? 'selected' : '' }}>Photography</option>
                                                    <option value="3" {{ $Vendors->vendors_categories == '3' ? 'selected' : '' }}>Videography</option>
                                                    <option value="4" {{ $Vendors->vendors_categories == '4' ? 'selected' : '' }}>Entertainment</option>
                                                    <option value="5" {{ $Vendors->vendors_categories == '5' ? 'selected' : '' }}>Hair & Make Up</option>
                                                    <option value="6" {{ $Vendors->vendors_categories == '6' ? 'selected' : '' }}>Product</option>
                                                    <option value="7" {{ $Vendors->vendors_categories == '7' ? 'selected' : '' }}>Transportation</option>
                                                    <option value="8" {{ $Vendors->vendors_categories == '8' ? 'selected' : '' }}>Fashion</option>
                                                </select>
                                            </div>
                                             <div class="col-md-6">
                                                <label for="vendors_bank_name">Company Bank Name</label>
                                                <input type="text" class="form-control" id="vendors_bank_name" name="vendors_bank_name" placeholder="Company Name" value="{{$Vendors->vendors_bank_name}}" readonly>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row row">
                                            <div class="col-md-6">
                                                <label for="vendors_bank_acc">Company Bank Account No</label>
                                                <input type="text" class="form-control" id="vendors_bank_acc" name="vendors_bank_acc" placeholder="Bank Account No" value="{{$Vendors->vendors_bank_acc}}" readonly>
                                            </div>
                                            
                                        </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
