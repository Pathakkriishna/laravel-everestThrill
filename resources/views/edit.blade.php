@extends('layout.app')

@section('content')
    <!-- <pre>
    {{$data}}
    </pre> -->

    <div class="mb-5 mt-5 mx-5 p-3 bg-info bg-opacity-10 border border-info border-start-1 rounded-end rounded-start">
        <div class="text-center fs-3  mt-2 text-primary">
            <h4>Update Details Here</h4>
        </div>
        <form action="{{route('updateData')}}" method="POST" class="mb-5  mx-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror border-success" id="" name="name" value="{{$data -> name}}">
                <span style="color :red;">@error('name') {{$message}} @enderror</span>

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" class="form-control border-success @error ('address') is-invalid @enderror" id="" name="address" value="{{$data->address}}">
                <span style="color :red;">@error('address') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contact Number</label>
                <input type="text" class="form-control border-success @error ('number') is-invalid @enderror" id="" name="number" value="{{$data -> contact}}">
                <span style="color :red;">@error('number') {{$message}} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Destination</label>
                <input type="text" class="form-control border-success @error ('destination') is-invalid @enderror" id="" name="destination" value="{{$data -> destination}}">
                <input type="hidden" name="id" value={{$data -> id}}>
                <span style="color :red;">@error('destination') {{$message}} @enderror</span>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection