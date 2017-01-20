<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')
@section('content')

<h3 class="text-center">Film recommendations</h3>
<hr/>

<!--There are many buttons applied here which perform different events-->
<div class="text-center">
  <!--This buttons logs the user out-->
    <a class="btn btn-danger" href="{{ route('currentFilms.index') }}">Log Out</a>
    <!--This buttons directs the user to the administrator film index interface-->
    <a class="btn btn-primary" href="{{ route('adminFilms.index') }}">Back</a>
    <!--This buttons directs the user to the film index interface-->
    <a class="btn btn-primary" href="{{ route('currentFilms.index') }}">Film Page</a>
</div>

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
<br/><br/>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!--The table is used to view all current films information
        The table include many action such as editing existing information-->
    <div class="row">
        <div class="col-xs-3">
            <h2 class="">Name</h2>
        </div>
        <div class="col-xs-3">
            <h2 class="">Description</h2>
        </div>
        <div class="col-xs-3">
            <h2 class="">Time</h2>
        </div>
        <div class="col-xs-3 text-center">
            <h2 class="text-center">Action</h2>
        </div>
    </div>

    <hr/>
<!--For each film content in the database, display all the information a table format.-->
    @foreach ($newFilmRequests as $key => $filmRequest)
        <div class="row">
        <div class="col-xs-3">
            <p>{{ $filmRequest->name }}</p>
        </div>
        <div class="col-xs-3">
            <p>{{ $filmRequest->description }}</p>
        </div>
        <div class="col-xs-3">
            <p>{{ $filmRequest->created_at }}</p>
        </div>
        <div class="col-xs-3 text-center">
          <!--The action include the delete function.-->
            {!! Form::open(['method' => 'DELETE','route' => ['adminNewFilms.destroy', $filmRequest->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <hr/>
    @endforeach
<div class="text-center">
    {!! $newFilmRequests->render() !!}
</div>
@endsection
