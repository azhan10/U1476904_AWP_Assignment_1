<!--Extending the default layer which is in the layouts directory.
    All the view content uses Bootstrap.-->
@extends('layouts.default')
@section('content')


<div id="currentFilms">
<h2 class="text-center">Film Records</h2>
<hr/>
<br/>
<!--This is used for displaying any sort of message-->
   @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('fail'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

<!--There are many buttons applied here which perform different events-->
    <div class="row">
        <div class="col-xs-6 text-left">
          <!--This buttons logs the user out-->
            <input onclick="logout()" class="btn btn-danger" type="button" value="Log Out"/>
        </div>
        <div class="col-xs-6 text-right">
          <!--This buttons directs the administrator to the create interface-->
            <a class="btn btn-success" href="{{ route('adminFilms.create') }}"> Create New Item</a>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-xs-6 text-left">
          <!--This buttons views current rental information-->
            <a class="btn btn-info" href="{{ route('adminRents.index') }}">Rent Orders</a>
        </div>
        <div class="col-xs-6 text-right">
          <!--This buttons directs the user to the index interface-->
            <a class="btn btn-info" href="{{ route('adminNewFilms.index') }}">Customers Films</a>
        </div>
    </div>

  <br/>


<!--The JavaScript function is used to logs the administrator out and direct him/her to home interface-->
<script type="text/javascript">
    function logout(){
         $(document).ready(function(){
                window.location.replace("currentFilms");
            });
    }
</script>


<h3>
  <b>Total Films:</b> {{ $filmCount }}
</h3>


<!--The table is used to view all current films information
    The include many action such as editing existing information-->
    <table class="table table-bordered">
        <tr>
            <th>Film Title</th>
            <th>Film Description</th>
            <th>Film Director</th>
            <th>Film Rating</th>
            <th>Film Star Name</th>
            <th width="280px">Action</th>
        </tr>
<!--For each film content in the database, display all the information a table format.-->
    @foreach ($films as $key => $film)
    <tr>
        <td>{{ $film->filmtitle }}</td>
        <td>{{ $film->filmdescription }}</td>
        <td>{{ $film->filmdirector }}</td>
        <td>{{ $film->filmrating }}</td>
        <td>{{ $film->filmstarname }}</td>
        <td>
          <!--The action include edit and delete functions.-->
            <a class="btn btn-primary" href="{{ route('adminFilms.edit',$film->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['adminFilms.destroy', $film->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
<div class="text-center">
    {!! $films->render() !!}
</div>
</div>

@endsection
