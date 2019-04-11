@extends("layout.master")
@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slide as $key=>$value)
        <tr>
            <th scope="row">{{$value->id}}</th>
            <td>{{$value->name}}</td>
            <td><img src="{{asset("storage/$value->image")}}" alt="" width="100px" height="100px"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
