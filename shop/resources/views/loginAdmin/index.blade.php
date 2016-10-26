@extends('layouts.default')

 


@section('content')
<h2 class="text-center">Administrator login</h2>
<br/>

<a class="btn btn-primary" href="{{ route('FilmCRUD.index') }}">Home Page</a>


@if ($message = Session::get('fail'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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

<br/>
<br/>
{!! Form::open(array('route' => 'loginAdmin.store','method'=>'POST')) !!}


<div class="panel panel-default">

<div class="panel-body">
    


    <div class="form-group">
        <strong>Username:</strong>
        {!! Form::text('username', null, array('placeholder' => 'Username','class' => 'form-control')) !!}
    </div>


    <div class="form-group">

        <strong>Password:</strong>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
    </div>

    <div class="text-center">
        <input  class="btn btn-success" name="submit" id="submit" type="submit" value="Log In"/> 
    </div>
</div>
</div>


{!! Form::close() !!}


@endsection