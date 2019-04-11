@extends("layout.master")
@section('content')
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                </tr>
            @foreach($customer as $key=>$value)
                @if($search === $value->name)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->city}}</td>
                    </tr>
                @endif
            @endforeach
            </table>
            <a href="{{route('list')}}">Back</a>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection
