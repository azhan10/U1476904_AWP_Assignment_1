@extends('layouts.default')

 


@section('content')


<div id="currentFilms">
<h2 class="">Film Records</h2>



    <input onclick="logout()" class="btn btn-danger" type="button" value="Log Out"/>
 <a class="btn btn-success" href="{{ route('adminCRUD.create') }}"> Create New Item</a>
<a class="btn btn-info" href="{{ route('adminNewFilms.index') }}">Customers Films</a>

<script type="text/javascript">
    function logout(){
         $(document).ready(function(){
                window.location.replace("FilmCRUD");
            });
    }
</script>

    <table class="table table-bordered">

        <tr>

            <th>Film Title</th>
            <th>Film Description</th>
            <th>Film Director</th>
            <th>Film Rating</th>
            <th>Film Star Name</th>

            <th width="280px">Action</th>

        </tr>

    @foreach ($items as $key => $item)

    <tr>

        <td>{{ $item->filmtitle }}</td>
        <td>{{ $item->filmdescription }}</td>
        <td>{{ $item->filmdirector }}</td>
        <td>{{ $item->filmrating }}</td>
        <td>{{ $item->filmstarname }}</td>

        <td>

            <a class="btn btn-primary" href="{{ route('adminCRUD.edit',$item->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['adminCRUD.destroy', $item->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>

    {!! $items->render() !!}

</div>

@endsection

