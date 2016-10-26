@extends('layouts.default')

@section('content')
</br>

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
                <option value="Returned">Ordered</option>
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
         <a class="btn btn-primary" href="{{ route('adminRents.index') }}">Return</a>
                <button type="submit" class="btn btn-success">Edit</button>
        </div>

</div>

 {!! Form::close() !!}

</div>
@endsection
