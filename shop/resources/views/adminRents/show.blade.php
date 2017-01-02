<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')
@section('content')

<div class="jumbotron">

<h2 class="text-center">Film Specification</h2>
<hr/>
<!--The information is used to view all information of an film using the id.
    the content that will be shown is the film title, duration, customer name, customer address, status, created at and updated at-->
 <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Film title:</strong>
                {{ $rentRecords->filmtitle }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p><strong>Duration:</strong>
                {{ $rentRecords->duration }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <p> <strong>Customer Name:</strong>
                {{ $rentRecords->customer_name }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <p> <strong>Customer Address:</strong>
                {{ $rentRecords->customer_Address }}</p>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <p> <strong>Status:</strong>
                {{ $rentRecords->status }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <p> <strong>Created At:</strong>
                {{ $rentRecords->created_at }}</p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <p> <strong>Updated At:</strong>
                {{ $rentRecords->updated_at }} </p>
            </div>
        </div>
<div class="text-center">
  <!--This buttons retuns the user back to the index interface-->
<a class="btn btn-primary" href="{{ route('adminRents.index') }}">Return</a>
</div>
</div>
@endsection
