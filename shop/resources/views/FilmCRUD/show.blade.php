@extends('layouts.default')

 


@section('content')


<h2 class="">Film Details</h2>

<a class="btn btn-info" href="{{ route('FilmCRUD.index') }}"> Back</a>


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


    <hr/>





@endsection

