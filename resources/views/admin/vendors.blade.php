@extends('layouts.app')
@section('content')
<?php use App\Models\VendorsServices;?>

 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Vendors
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/vendors') }}"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item active">Vendors</li>
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
                    <h5>Vendors List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordernone">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total Service</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($Vendors as $key => $Vendor):?>
                        <?php $VendorsServices = VendorsServices::where('vs_vendor_id', $Vendor->vendors_id)->count(); 
                        ?>
                        <tr>
                            <td></td>
                            <td class="digits">{{$Vendor['vendors_company']}}</td>
                            <td class="font-danger">{{$Vendor['vendors_email']}}</td>
                            <td class="digits">{{$Vendor['vendors_phone']}}</td>
                            <td class="digits">{{$Vendor['category']['categories_name']}}</td>
                            <td class="digits">
                                @if($Vendor['vendors_status'] == '0')
                                   <span class="badge bg-danger"> Deactive</span>
                                @elseif($Vendor['vendors_status'] == '1')
                                    <span class="badge bg-success">Active</span>
                                @elseif($Vendor['vendors_status'] == '2')
                                    <span class="badge bg-warning">Pending</span>
                                @endif
                            </td>
                             <td class="digits">{{$VendorsServices}}</td>
                              <td class="digits">
                                @if($Vendor['vendors_level'] == '1')
                                   <span class="badge bg-primary"> Verified</span>
                                @elseif($Vendor['vendors_level'] == '2')
                                    <span class="badge bg-warning">Preferred</span>
                                @elseif($Vendor['vendors_level'] == '3')
                                    <span class="badge bg-danger">Hot</span>
                                @elseif($Vendor['vendors_level'] == '4')
                                    <span class="badge bg-success">Premium</span>
                                @elseif($Vendor['vendors_level'] == '5')
                                    <span class="badge bg-info">Exclusive</span>
                                @endif
                            </td>
                            <td class="digits">
                                @if($Vendor['vendors_status'] == '2')
                                <a href="{{ url('vendor-status', [Crypt::encrypt($Vendor->vendors_id),1]) }}" class="btn btn-success">Approve</a>
                                <a href="{{ url('vendor-status', [Crypt::encrypt($Vendor->vendors_id),0]) }}" class="btn btn-danger" >Reject</a>
                                @endif
                                <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=60{{$Vendor->vendors_phone}}"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp Vendor</a>
                                <a href="{{ url('vendor-detail', [Crypt::encrypt($Vendor->vendors_id)]) }}" class="btn btn-primary " >View</a>
                                <a href="{{ url('vendor-service', [Crypt::encrypt($Vendor->vendors_id)]) }}" class="btn btn-info " >Services</a>
                                <a type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#vendorModal{{$Vendor->vendors_id}}">Vendor Level</a>
                                                 
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php foreach ($Vendors as $key => $Vendor):?>
<div class="modal fade" id="vendorModal{{$Vendor->vendors_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <form class="theme-form" enctype="multipart/form-data" method="post" action="{{ url('/vendor-update-level') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $Vendor->vendors_id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$Vendor->vendors_company}}</h5>
      </div>
      <div class="modal-body">
            <div class="form-row row">
                <div class="col-md-6">
                    <label for="email">Vendor Level</label>
                    <select class="form-control" id="vendors_level" name="vendors_level"  required>
                            <option value="0" {{ $Vendor->vendors_level == '0' ? 'selected' : '' }}>Non-Verified</option>
                            <option value="1" {{ $Vendor->vendors_level == '1' ? 'selected' : '' }}>Verified</option>
                            <option value="2" {{ $Vendor->vendors_level == '2' ? 'selected' : '' }}>Preferred</option>
                            <option value="3" {{ $Vendor->vendors_level == '3' ? 'selected' : '' }}>Hot</option>
                            <option value="4" {{ $Vendor->vendors_level == '4' ? 'selected' : '' }}>Premium</option>
                            <option value="5" {{ $Vendor->vendors_level == '5' ? 'selected' : '' }}>Exclusive</option>
                        </select>
                </div>                
            </div>
            <br>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Update</button>
      </div>
       </form>
    </div>
  </div>
</div>
 <?php endforeach;?>

@endsection
