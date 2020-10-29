@extends('layouts.dashboard')
@section('title')
  Add Role
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      div.dataTables_wrapper div.dataTables_length select {
        width: 75px;
      }
      .table th, .table td {
        padding: 3px 10px;
      }
      .btn-social {
        min-width: 0px;
      }
    </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="card card-table">
        <div class="card-header">Customer List
          <div class="tools dropdown">
              <a data-toggle="tooltip" data-original-title="Add Post" href="{{ route('customer.create') }}" class="btn btn-space btn-primary"><i class="fa fa-plus-circle"></i> Add Customer</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-hover table-fw-widget" id="table4">
            <thead>
              <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($customer as $key => $value)
                <tr class="odd gradeX">
                  <td>{{$value->name}}</td>
                  <td>{{$value->contact}}</td>
                  <td>{{$value->address}}</td>
                  <td>
                      <a data-toggle="tooltip" data-original-title="Edit Post"  href="{{ route('customer.edit',$value->id ) }}" user-id="{{ $value->id }}" class="btn btn-space btn-outline-primary btn-space"><i class="fa fa-pencil"></i> Edit</a>
                      <a data-toggle="tooltip" data-original-title="Delete Post" id="swal-danger" href="{{ route('customer.destroy',$value->id ) }}" user-id="{{ $value->id }}" class="btn btn-space btn-outline-danger btn-space"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}" type="text/javascript"></script>
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/jszip/jszip.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/pdfmake/pdfmake.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/pdfmake/vfs_fonts.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js') }}" type="text/javascript"></script> -->
  <script src="{{ asset('assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script> -->

  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script> -->
  <!-- <script src="{{ asset('assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" type="text/javascript"></script> -->
  <script src="{{ asset('assets/js/app-tables-datatables.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      App.dataTables();
    });
  </script>
@endpush