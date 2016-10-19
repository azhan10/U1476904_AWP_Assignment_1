@extends('layouts.default')




@section('content')


 <h2 class="text-center">Add New Film Content</h2>
 <hr/>

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

<a class="btn btn-info" href="{{ route('adminCRUD.index') }}"> Back</a>

<br/>
<br/>

    {!! Form::open(array('route' => 'adminCRUD.store','method'=>'POST')) !!}
    
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

