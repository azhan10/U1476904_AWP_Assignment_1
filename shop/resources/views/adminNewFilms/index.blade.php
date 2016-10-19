@extends('layouts.default')

@section('content')

<h3 class="">Film recommendations</h3>
<hr/>

<script type="text/javascript">
    function logout(){
         $(document).ready(function(){
                window.location.replace("FilmCRUD");
            });
    }
</script>


    <input onclick="logout()" class="btn btn-danger" type="button" value="Log Out"/>
    <a class="btn btn-primary" href="{{ route('adminCRUD.index') }}">Back</a>
    <a class="btn btn-primary" href="{{ route('FilmCRUD.index') }}">Home Page</a>



   

            <h2 class="">Name</h2>
            <h2 class="">Description</h2>
            <h2 class="">Time</h2>
            <h2 class="text-center">Action</h2>
        

    @foreach ($blogs as $key => $item)
        
            <p>{{ $item->name }}</p>
        
            <p>{{ $item->description }}</p>
        
            <p>{{ $item->created_at }}</p>
       
            {!! Form::open(['method' => 'DELETE','route' => ['adminNewFilms.destroy', $item->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}
      
    @endforeach

    {!! $blogs->render() !!}


@endsection

