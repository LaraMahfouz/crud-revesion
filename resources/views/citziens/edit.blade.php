@extends('citziens.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Citziens</h2>
            </div>
            <div class="pull-center">
                <a class="btn btn-warning" href="{{ route('citziens.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('citziens.update',$citzien->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <input type="text" name="citzien_full_name" value="{{ $citzien->citzien_full_name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
               
                    <input class="form-control" name="citzien_city" value="{{ $citzien->citzien_city}}" placeholder="City">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                   
                    <input class="form-control" name="citzien_nid" value="{{ $citzien->citzien_nid}}" placeholder="National Id">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                
                    <input class="form-control" name="citzien_mobile" value="{{ $citzien->citzien_mobile}}" placeholder="Mobile">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
             
                    <input class="form-control" name="citzien_address" value="{{ $citzien->citzien_address}}" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                   
                    {{-- <input class="form-control" name="citzien_gender"
                        placeholder="Gender"> --}}
                    <label class="col col-form-label ">Gender</label>
                    <div class="col">
                        <select name="citzien_gender" class="selectpicker" data-style="select-with-transition"
                            title="Select Gender" data-size="7">
                            <option value="male">Male </option>
                            <option value="female">female </option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 text-center">
              <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </div>
   
    </form>
@endsection