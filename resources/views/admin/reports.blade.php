@extends('layouts.app')
@section('content')

 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Reports
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/reports') }}"><i data-feather="bar-chart"></i></a></li>
                    <li class="breadcrumb-item active">Reports</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>Vendor Categories List</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordernone">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Vendor Categories</th>
                            <th scope="col">Total Count</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                       
                        <tr>
                            <td>1</td>
                            <td>Caterers</td>
                            <td class="digits">{{$CaterersVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Photography</td>
                            <td class="digits">{{$PhotoVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Videography</td>
                            <td class="digits">{{$VideoVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Entertainment</td>
                            <td class="digits">{{$EnterVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Hair & Make Up</td>
                            <td class="digits">{{$HMVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Products</td>
                            <td class="digits">{{$ProductVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Transportation</td>
                            <td class="digits">{{$TransportVendorsCount}}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>Fashion</td>
                            <td class="digits">{{$FashionVendorsCount}}</td>
                        </tr>
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
