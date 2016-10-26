@extends('layouts.default')

 


@section('content')

<h2 class="text-center">Renting Following Film</h2>

<hr/>

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

 <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

               <h3> <strong>Film title:</strong>

                {{ $customerRent->filmtitle }}</h3>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

              <h3>  <strong>Film director:</strong>

                {{ $customerRent->filmdirector }}</h3>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

               <h3> <strong>Film rating:</strong>

                {{ $customerRent->filmrating }}</h3>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

               <h3> <strong>Film star name:</strong>

                {{ $customerRent->filmstarname }}</h3>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

              <h3>  <strong>Film description:</strong>

                {{ $customerRent->filmdescription }}</h3>

            </div>
        </div>

    </div>

<hr/>

{!! Form::open(array('route' => 'customerRent.store','method'=>'POST')) !!}


<div style="" class="col-xs-12 col-sm-12 col-md-12">

            <div style="display:none;" class="form-group">


          <select class="form-control" name="film_id">     
        @foreach ($film_id as $key => $film)
        <option value="{{$film->id}}">{{$film->id}}</option>
           @endforeach

        </select>

            </div>

        </div>


        <div style="display:none;" class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Film Title:</strong>
                @foreach ($film_id as $key => $filmtitle)
                {!! Form::text('filmtitle', $filmtitle->filmtitle, array('placeholder' => 'Film title','class' => 'form-control')) !!}
                @endforeach

            </div>

        </div>

        <div style="display:none;" class="col-xs-12 col-sm-12 col-md-12">

           <div class="form-group">

                <strong>Status:</strong>
   
                {!! Form::text('status', 'Ordered', array('placeholder' => 'Your name','class' => 'form-control')) !!}
                

            </div>

        </div>

        <div style="" class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>
   
                {!! Form::text('customer_name', null, array('placeholder' => 'Your name','class' => 'form-control')) !!}
                

            </div>

        </div>

        <div style="" class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Address:</strong>
   
                {!! Form::text('customer_Address', null, array('placeholder' => 'Your Address','class' => 'form-control')) !!}
                

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
        <a id="returnHome" class="btn btn-info" href="{{ route('FilmCRUD.index',$film->id) }}">Return</a>
        <button type="submit" class="btn btn-success">Submit</button>

        </div>

 {!! Form::close() !!}



@endsection
