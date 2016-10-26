@extends('layouts.default')

@section('content')



<div class="jumbotron">

<h2 class="text-center">Film Specification</h2>
<hr/>

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
<a class="btn btn-primary" href="{{ route('adminRents.index') }}">Return</a>
</div>
</div>
@endsection
