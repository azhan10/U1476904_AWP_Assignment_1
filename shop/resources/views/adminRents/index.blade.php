@extends('layouts.default')

@section('content')

</br>



 @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="row">
    <div class="col-xs-6 text-left">
    </br>
        <a class="btn btn-info" href="{{ route('adminCRUD.index') }}">Home</a>
        <input onclick="logout()" class="btn btn-danger" type="button" value="Log Out"/>
    </div>
    <div class="col-xs-6 text-right">
        <h2 class="text-center">Current Rental Records</h2>
    </div>
</div>
<hr/>
</br>
    <div class="panel panel-info">
    <div class="panel-body">

    <div class="row">
        <div class="col-xs-2">
            <h2 class="">Film Title</h2>
        </div>
        <div class="col-xs-2">
            <h2 class="">Duration</h2>
        </div>
        <div class="col-xs-2">
            <h2 class="">Customer Name</h2>
        </div>
        <div class="col-xs-2">
            <h2 class="">Customer Address</h2>
        </div>
        <div class="col-xs-2">
            <h2 class="">Date Added</h2>
        </div>
        <div class="col-xs-2 text-center">
            <h2 class="text-center">Action</h2>
        </div>
    </div>

    <hr/>

    @foreach ($adminRents as $key => $item)
        <div class="row">
        <div class="col-xs-2">
            <p>{{ $item->filmtitle }}</p>
        </div>
        <div class="col-xs-2">
            <p>{{ $item->duration }}</p>
        </div>
        <div class="col-xs-2">
            <p>{{ $item->customer_name }}</p>
        </div>
        <div class="col-xs-2">
            <p>{{ $item->customer_Address }}</p>
        </div>
        <div class="col-xs-2">
            <p>{{ $item->created_at }}</p>
        </div>
        <div class="col-xs-2 text-center">
        <a class="btn btn-info" href="{{ route('adminRents.show',$item->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('adminRents.edit',$item->id) }}">Edit</a></br></br>
            {!! Form::open(['method' => 'DELETE','route' => ['adminRents.destroy', $item->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <hr/>
    @endforeach
</div>
</div>

@endsection
