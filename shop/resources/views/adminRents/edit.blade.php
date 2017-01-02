<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')
@section('content')
</br>

<!--This is used for displaying any sort of error-->
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div class="jumbotron">

<h2 class="text-center">Edit Rental Film Information</h2>
<hr/>

<!--Here is the form which allows adminstrators to insert new data to the database.
    I embedded the Form class to my laravel project.
    The form includes 5 contents; film title, customer name, customer address, status and duration.
    It also includes a button which activates the opertion to updates the current data to the database (using the controller and model)
-->

{!! Form::model($currentRents, ['method' => 'PATCH','route' => ['adminRents.update', $currentRents->id]]) !!}

<div class="panel-body">

	<div style="display:none;" class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film Title:</strong>
                {!! Form::text('filmtitle', null, array('placeholder' => 'Film director','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Customer Name:</strong>
                {!! Form::text('customer_name', null, array('placeholder' => 'Film rating','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Customer Address:</strong>
                {!! Form::text('customer_Address', null, array('placeholder' => 'Film star name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="status">
                <option value="Rented Out">Rented Out</option>
                <option value="Returned">Returned</option>
                <option value="Ordered">Ordered</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
                <select class="form-control" name="duration">
                <option value="1 day">1 day</option>
                <option value="2 day">2 day</option>
                <option value="3 day">3 day</option>
                <option value="4 day">4 day</option>
                <option value="5 day">5 day</option>
                </select>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <!--This button is used to return users back to the administrator rental index interface-->
         <a class="btn btn-primary" href="{{ route('adminRents.index') }}">Return</a>
         <!--Here is the submit button which performs the operation to edit information-->
                <button type="submit" class="btn btn-success">Edit</button>
        </div>
</div>
 {!! Form::close() !!}
</div>
@endsection
