<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')

@section('content')


 <h2 class="text-center">Add New Film Content</h2>
 <hr/>
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

<!--Button is used to return back to index interface-->
<a class="btn btn-info" href="{{ route('adminFilms.index') }}"> Back</a>

<br/>
<br/>

<!--Here is the form which allows adminstrators to insert new data to the database.
    I embedded the Form class to my laravel project.
    The form includes 5 contents; film title, film description, film director, film rating and film star name.
    It also includes a button which activates the opertion to add the current data to the database (using the controller and model)
-->
    {!! Form::open(array('route' => 'adminFilms.store','method'=>'POST')) !!}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film Title:</strong>
                {!! Form::text('filmtitle', null, array('placeholder' => 'Film title','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film Descrpition:</strong>
                {!! Form::text('filmdescription', null, array('placeholder' => 'Film descrption','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film Director:</strong>
                {!! Form::text('filmdirector', null, array('placeholder' => 'Film director','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film Rating:</strong>
                {!! Form::text('filmrating', null, array('placeholder' => 'Film rating','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Film star name:</strong>
                {!! Form::text('filmstarname', null, array('placeholder' => 'Film star name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
