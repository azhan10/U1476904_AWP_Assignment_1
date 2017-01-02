<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')

@section('content')
    <h2 class="text-center">Film Review</h2>
    <br/>

<!--This is used for displaying any sort of message-->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<!--There are many buttons applied here which perform different events-->
    <div class="row">
        <div class="col-xs-6 text-left">
          <!--This button directs the administrator to the account interface where he/she can log in.-->
            <a class="btn btn-primary" href="{{ route('loginAdmin.index') }}">Admistrator</a>
        </div>
        <div class="col-xs-6 text-right">
          <!--This button directs users to the inform me interface (index page)-->
            <h4><b>Film description not here? <a class="btn btn-primary" href="{{ route('newFilmsCRUD.index') }}">Inform Me</a></b></h4>

        </div>
    </div>
<hr/>
<br/>
<!--For each film content in the database, display all the information a table format.-->
    @foreach ($films as $key => $film)
    <div class="row">
        <div class="col-xs-9">
            <h2 class="text-center">{{ $film->filmtitle }}</h2>
             <p class=""><b>Description: </b>{{ $film->filmdescription }}</p>
        </div>
        <div class="col-xs-3 text-left">
          <!--The action include the show function.-->
            <a class="btn btn-info" href="{{ route('FilmCRUD.show',$film->id) }}">Show</a>
        </div>
    </div>
        <hr/>
    @endforeach

 <div class="text-center">
    {!! $films->render() !!}
</div>

@endsection
