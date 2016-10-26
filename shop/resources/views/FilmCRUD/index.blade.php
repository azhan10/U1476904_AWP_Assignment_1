@extends('layouts.default')

 


@section('content')
    <h2 class="text-center">Film Review</h2>
    <br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-6 text-left">
            <a class="btn btn-primary" href="{{ route('loginAdmin.index') }}">Admistrator</a>
        </div>
        <div class="col-xs-6 text-right">
            <h4><b>Film description not here? <a class="btn btn-primary" href="{{ route('newFilmsCRUD.index') }}">Inform Me</a></b></h4>
      
        </div>
    </div>
<hr/>
<br/>

    @foreach ($films as $key => $film)
    <div class="row">
        <div class="col-xs-9">
            <h2 class="text-center">{{ $film->filmtitle }}</h2>
             <p class=""><b>Description: </b>{{ $film->filmdescription }}</p>
        </div>

        <div class="col-xs-3 text-left">
            <a class="btn btn-info" href="{{ route('FilmCRUD.show',$film->id) }}">Show</a>
        </div>
    </div>
        <hr/>
    @endforeach

 <div class="text-center">
    {!! $films->render() !!}
</div>

@endsection

