@extends('layouts.default')

 


@section('content')


<h2 class="text-center">Film Details</h2>
<hr/>

<a class="btn btn-info" href="{{ route('FilmCRUD.index') }}">Go Back</a>
<br/>
<br/>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Film title:</strong>

                {{ $film->filmtitle }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Film director:</strong>

                {{ $film->filmdirector }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Film rating:</strong>

                {{ $film->filmrating }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Film star name:</strong>

                {{ $film->filmstarname }}

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Film description:</strong>

                {{ $film->filmdescription }}

            </div>
        </div>

    </div>

@foreach ($film_id as $key => $film)
<div class="text-center">
    <a class="btn btn-primary" href="{{ route('customerRent.show', $film->id ) }}">Rent this movie</a>
</div>
@endforeach

    <hr/>
    <h2 class="text-center">Reviews</h2><br/>


    {!! Form::open(array('route' => 'FilmCRUD.store','method'=>'POST')) !!}

    <div class="row">

        <div style="display:none;" class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Film Title:</strong>
                @foreach ($film_id as $key => $filmtitle)
                {!! Form::text('filmtitle', $filmtitle->filmtitle, array('placeholder' => 'Film title','class' => 'form-control')) !!}
                @endforeach

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Film Descrpition:</strong>

                {!! Form::text('description', null, array('placeholder' => 'Film descrption','class' => 'form-control')) !!}

            </div>

        </div>


         <div style="display:none;" class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">


          <select class="form-control" name="film_id">     
        @foreach ($film_id as $key => $film)
        <option value="{{$film->id}}">{{$film->id}}</option>
           @endforeach

        </select>

            </div>

        </div>

       <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Review:</strong>

                <select class="form-control" name="review"> 
                <option value="1 Stars">1 Stars</option>
                <option value="2 Stars">2 Stars</option>
                <option value="3 Stars">3 Stars</option>
                <option value="4 Stars">4 Stars</option>
                <option value="5 Stars">5 Stars</option>
                </select>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-success">Submit</button>

        </div>

    </div>

    {!! Form::close() !!}


<hr/>


@foreach ($filmReviews as $key => $review)


<h4><b>Film Title: </b>{{ $review->filmtitle }}</h4>
    <h4><b>Description: </b>{{ $review->description }}</h4>
    <h4><b>Review: </b>{{ $review->review }}</h4>
    <hr/>

@endforeach


@endsection

