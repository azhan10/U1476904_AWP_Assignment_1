@extends('layouts.default')




@section('content')

<img src="http://www.cotuitcenterforthearts.org/images/bbevents/CCftA_Film_Loop.png" width="100%">


<br/>
<br/>


<div class="panel panel-default">
  <div class="panel-body text-center">

  <h1>Welcome to film review</h1>
<a class="btn btn-info" href="{{ route('FilmCRUD.index') }}">View current films</a>

  </div>
</div>




@endsection

