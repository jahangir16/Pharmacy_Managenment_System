@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('customers.create') }}" class="btn btn-primary m-3">Add a new customer</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>CNIC</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->cnic}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->phone}}</td>
                <td>
                    <a href="{{ route('customers.show', ['customer'=>$customer->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> | 
                    <a href="{{ route('customers.edit', ['customer'=>$customer->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('customers.destroy', ['customer'=>$customer->id]) }}" style="display: inline" method="POST">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection