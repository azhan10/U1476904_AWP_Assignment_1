@extends('layouts.default')

 


@section('content')

    @foreach ($films as $key => $film)

            <h2 class="text-center">{{ $film->filmtitle }}</h2>
             <p class=""><b>Description: </b>{{ $film->filmdescription }}</p>
        
            <a class="btn btn-info" href="{{ route('FilmCRUD.show',$film->id) }}">Show</a>
        
    
    @endforeach

    {!! $films->render() !!}

@endsection

