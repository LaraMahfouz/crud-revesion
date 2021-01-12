@extends('citziens.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3 style="color: pink"> Show Citziens</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('citziens.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="jumbotron text-center">
        <br/>
        <h3>NID      - {{ $citzien->citzien_nid }} </h3>
        <h3>Fullname - {{ $citzien->citzien_full_name }} </h3>
        <h3>Gender   - {{ $citzien->citzien_gender }} </h3>
        <h3>City     - {{ $citzien->citzien_city }} </h3>
        <h3>Gender   - {{ $citzien->citzien_gender }} </h3>
        <h3>Mobile   - {{ $citzien->citzien_mobile }} </h3>
        <h3>Address  - {{ $citzien->citzien_address }} </h3>
    </div>
   
    {{-- <div class="jumbotron text-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>
                {{ $citzien->citzien_full_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $citzien->citzien_gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                {{ $citzien->citzien_city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>National Id:</strong>
                {{ $citzien->citzien_nid }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {{ $citzien->citzien_mobile }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $citzien->citzien_address }}
            </div>
        </div>
    </div> --}}
  
@endsection