@extends("layout.master")
@section('content')
    <br>
    <th>
        <form method="post" action="{{route('search')}}">
            @csrf
            <input type="text" name="search">
            <input type="submit" value="Search">
        </form>
    </th>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $value)
        <tr>
            <th scope="row">{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->city}}</td>
            <td><a href="{{route('edit', $value->id)}}">Edit</a></td>
            <td><a href="{{route('destroy', $value->id)}}" onclick="return confirm('ban co chac muon xoa ? ')">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('formAdd')}}">Them Moi</a>
@endsection
