@extends('layouts.default')

@section('content')

<h3 class="">Please inform me any new films</h3>


<a class="btn btn-info" href="{{ route('FilmCRUD.index') }}">Home Page</a>

<br/>
<br/>

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


<div class="text-center">
    
    {!! $blogs->render() !!}
</div>
@endsection

