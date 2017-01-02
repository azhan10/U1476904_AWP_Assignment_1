<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')

@section('content')

<h3 class="text-center">Please inform me any new films</h3>

<!--This is used for displaying any sort of message-->
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<!--This is used for displaying any sort of message-->
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

<!--Button is used to direct users to the index page of the FilmCRUD folder-->
<a class="btn btn-info" href="{{ route('FilmCRUD.index') }}">Home Page</a>

<br/>
<br/>
<!--The form below is used to inform the administrator for new film requests.-->
    {!! Form::open(array('route' => 'newFilmsCRUD.index','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Your name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    <br/>
    {!! Form::close() !!}

    <hr/>
    <!--For each film request information is stored in the database, display the name and the description-->
    @foreach ($blogs as $key => $item)
        <h2 class="text-center"><b>{{ $item->name }}</b></h2>
        <p><b>Description: </b>{{ $item->description }}</p>
        <hr/>
    @endforeach
<div class="text-center">
    {!! $blogs->render() !!}
</div>
@endsection
