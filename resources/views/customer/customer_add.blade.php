@extends('layouts.dashboard')
@section('title')
  @if(!isset($customer))
    Add Customer
  @else
    Edit Customer
  @endif
@endsection

@section('styles')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-border-color card-border-color-primary">
        <div class="card-header">
          <div class="d-inline-block">
            <h3 class="card-title">
              @if(!isset($customer))
                Add Customer
              @else
                Edit Customer
              @endif
            </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="{{ URL::previous() }}" class="btn btn-primary pull-right"><i class="fa fa-reply mr5"></i> Back</a>
          </div>
        </div>
        <hr>
        <div class="card-body">
          @if(!isset($customer))
            <form method="post" action="{{ route('customer.store') }}">
          @else
            <form method="post" action="{{ route('customer.update',$customer->id) }}">
          @endif
            @csrf
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
              <div class="col-12 col-sm-8 col-lg-6">
                @if(!isset($customer))
                  <input class="form-control" name="name" placeholder="Name"></input>
                @else
                  <input class="form-control" name="name" placeholder="Name" value="{{$customer->name}}"></input>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right">Contact</label>
              <div class="col-12 col-sm-8 col-lg-6">
                @if(!isset($customer))
                  <input class="form-control" name="contact" placeholder="Contact"></input>
                @else
                  <input class="form-control" name="contact" placeholder="Contact" value="{{$customer->contact}}"></input>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label class="col-12 col-sm-3 col-form-label text-sm-right">Address</label>
              <div class="col-12 col-sm-8 col-lg-6">
                @if(!isset($customer))
                  <textarea class="form-control" name="address" placeholder="Address"></textarea>
                @else
                  <textarea class="form-control" name="address" placeholder="Address">{{$customer->address}}</textarea>
                @endif
              </div>
            </div>
            <div class="form-group row text-right">
              <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                @if(!isset($customer))
                  <button class="btn btn-space btn-primary" class="submit_btn" type="Submit">Submit</button>
                @else
                  <button class="btn btn-space btn-primary" class="submit_btn" type="Submit">Update</button>
                @endif
                <button class="btn btn-space btn-secondary" type="button">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/lib/parsley/parsley.min.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //-initialize the javascript
      App.init();
      $('form').parsley();
    });
  </script>
@endpush