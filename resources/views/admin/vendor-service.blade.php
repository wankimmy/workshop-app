@extends('layouts.app')
@section('content')
<?php use App\Models\VendorsServices;?>

 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Vendors Service
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/vendors') }}"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item active">Vendors Service</li>
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
                    <table class="table table-bordernone">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Name</th>
                            <th scope="col">Price (MYR)</th>
                            <th scope="col">Payout (MYR)</th>
                            <th scope="col">Description</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Required Deposit ?</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Created At</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($VendorsServices as $key => $VendorsService):?>
                        
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="digits">{{$VendorsService['vs_name']}}</td>
                            <td class="digits">{{$VendorsService['vs_price']}}</td>
                            <td class="digits">{{$VendorsService['vs_payout_price']}}</td>
                            <td class="digits">{{$VendorsService['vs_desc']}}</td>
                            <?php $picture = explode("|",$VendorsService->vs_picture)?>
                            <td> 
                                @foreach ($picture as $key => $pictures)
                                    <img src="{{URL::asset('uploads/vendors/'.$pictures)}}" alt="" class="img-fluid">
                                @endforeach
                            </td>
                            <td class="digits">{{$VendorsService['vs_details']}}</td>
                            <td class="digits">
                                @if($VendorsService['vs_deposit'] == '0')
                                    <span class="badge bg-warning">No</span>
                                @else
                                <span class="badge bg-success">Yes</span>
                                @endif
                            </td>
                            <td class="digits">
                                <strong>Start: </strong>{{$VendorsService['vs_start_day']}} <br> <strong>End: </strong> {{$VendorsService['vs_end_day']}}
                            </td>
                            <td class="digits"><strong>Start: </strong>{{$VendorsService['vs_start_time']}} <br> <strong>End: </strong> {{$VendorsService['vs_end_time']}}
                            </td>
                            <td class="digits">{{$VendorsService['created_at']}}</td>
                            
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
