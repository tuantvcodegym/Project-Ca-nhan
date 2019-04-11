@extends("layout.master")
@section('content')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name-1" required value="{{$customer->name}}">
        </div>
        <div>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email-1" required value="{{$customer->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter city" name="city-1" required value="{{$customer->city}}">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection