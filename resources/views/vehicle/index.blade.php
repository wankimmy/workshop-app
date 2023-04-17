@extends('layouts.app')
@section('content')


 <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Vehicles
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/vendors') }}"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item active">Vehicles</li>
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
                    <h5>Vehicles List</h5>
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-dark" href="{{ url('vehicles/create') }}"> Create New Vehicle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordernone">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Car Model</th>
                            <th scope="col">Year</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Customer Detail</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Vehicle as $key => $Vehicles)
                            <tr>
                              <td></td>
                                <td>{{ $key+1 }}</td>
                                
                                <td>{{ $Vehicles->v_model }}</td>
                                <td>{{ $Vehicles->v_model_year   }}</td>
                                <td>{{ $Vehicles->v_plate_no }}</td>
                                <td>{{ $Vehicles->v_type }}</td>
                                <td>{{ $Vehicles->v_user_id }}</td>
         

                                <td>
                                    <form action="{{ url('vehicles/destroy',$Vehicles->id) }}" method="POST">
                                      <a class="btn btn-success" href="{{ url('vehicles/show',$Vehicles->id) }}">View</a>
                                        <a class="btn btn-primary" href="{{ url('vehicles/edit',$Vehicles->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" class="text-danger">Delete</button>
                                       
                                    </form>
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
