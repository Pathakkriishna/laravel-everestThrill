@extends('layout.app')

@section('content')

<div class="text-center fs-3  mt-5 text-primary">
    <h1>Everest Thrill</h1>
</div>
<div class="mb-5 mt-5 mx-5 p-3 bg-info bg-opacity-10 border border-info border-start-1 rounded-end rounded-start">
    <div class="text-center fs-3  mt-2 text-primary">
        <h4>Insert Details Here</h4>
    </div>
    <form action="{{route('save')}}" method="POST" class="mb-5  mx-5">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror border-success" id="" aria-describedby="emailHelp" name="name" placeholder="Full name">
            <span style="color :red;">@error('name') {{$message}} @enderror</span>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control @error ('address') is-invalid @enderror border-success" id="" name="address" placeholder="Eg: Baniyatar 06,Kathmandu">
            <span style="color :red;">@error('address') {{$message}} @enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contact Number</label>
            <input type="text" class="form-control @error ('number') is-invalid @enderror border-success" id="" name="number">
            <span style="color :red;">@error('number') {{$message}} @enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Destination</label>
            <input type="text" class="form-control @error ('destination') is-invalid @enderror border-success" id="" name="destination">
            <span style="color :red;">@error('destination') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="m-5 p-3 bg-info bg-opacity-10 border border-info border-start-1 rounded-end rounded-start">
    <div class="text-center fs-3  mt-2 text-primary">
        <h4>List of Trekkers</h4>
    </div>

    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Destination</th>
                <th scope="col">Start Date</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($list as $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->contact}}</td>
                <td>{{$value->destination}}</td>
                <td>{{$value->created_at}}</td>
                <td><a href="/edit/{{$value->id}}" type="button" class="btn btn-success">Edit</a></td>
                <td><a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>
@endsection