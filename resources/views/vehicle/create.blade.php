@extends('layouts.app')
@section('content')

    <div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create Vehicle
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{ url('/vehicles') }}"><i data-feather="users"></i></a></li>
                    <li class="breadcrumb-item active"> Create Vehicle</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         <div class="card ">
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form enctype="multipart/form-data" method="post" action="{{ url('/vehicles/store') }}">
         @csrf

        <div class="form-group">
              <label for="price">Car Model :</label>
              <input type="text" class="form-control" name="v_model" placeholder="Honda Civic 2002" />
          </div>

          <div class="form-group">
              <label for="price">Car Year :</label>
              <input type="text" class="form-control" name="v_model_year" placeholder="2002"/>
          </div>

           <div class="form-group">
              <label for="price">Car Plate Number :</label>
              <input type="text" class="form-control" name="v_plate_no" placeholder="WTG 2546"/>
          </div>

          <div class="form-group">
              <label for="quantity">Vehicle Type:</label>
              <select class="form-control select2" name="v_type" style="width: 100%;">
                    <option value="">Please Select Vehicle Type</option>
                    <option value="car">car</option>
                    <option value="motorcycle">motorcycle</option>
                    <option value="4x4">4x4</option>
                    <option value="van">van</option>
                    <option value="lorry">lorry</option>
                  </select>
          </div>

         

          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
    </div>
  </div>
@endsection