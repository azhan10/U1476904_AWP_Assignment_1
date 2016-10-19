@extends('layouts.default')

@section('content')

<h3 class="text-center">Film recommendations</h3>
<hr/>

<script type="text/javascript">
    function logout(){
         $(document).ready(function(){
                window.location.replace("FilmCRUD");
            });
    }
</script>

<div class="text-center">
    <input onclick="logout()" class="btn btn-danger" type="button" value="Log Out"/>
    <a class="btn btn-primary" href="{{ route('adminCRUD.index') }}">Back</a>
    <a class="btn btn-primary" href="{{ route('FilmCRUD.index') }}">Home Page</a>
</div>

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

<br/><br/>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-3">
            <h2 class="">Name</h2>
        </div>
        <div class="col-xs-3">
            <h2 class="">Description</h2>
        </div>
        <div class="col-xs-3">
            <h2 class="">Time</h2>
        </div>
        <div class="col-xs-3 text-center">
            <h2 class="text-center">Action</h2>
        </div>
    </div>

    <hr/>

    @foreach ($blogs as $key => $item)
        <div class="row">
        <div class="col-xs-3">
            <p>{{ $item->name }}</p>
        </div>
        <div class="col-xs-3">
            <p>{{ $item->description }}</p>
        </div>
        <div class="col-xs-3">
            <p>{{ $item->created_at }}</p>
        </div>
        <div class="col-xs-3 text-center">
            {!! Form::open(['method' => 'DELETE','route' => ['adminNewFilms.destroy', $item->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <hr/>
    @endforeach

<div class="text-center">
    {!! $blogs->render() !!}
</div>

@endsection

