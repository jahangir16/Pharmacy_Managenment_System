@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('vendors.create') }}" class="btn btn-primary m-3">Add a new vendor</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $Vendor)
            <tr>
                <td>{{$Vendor->id}}</td>
                <td>{{$Vendor->name}}</td>
                <td>{{$Vendor->email}}</td>
                <td>{{$Vendor->phone}}</td>
                <td>{{$Vendor->address}}</td>
                <td>
                    <a href="{{ route('vendors.show', ['vendor'=>$Vendor->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> | 
                    <a href="{{ route('vendors.edit', ['vendor'=>$Vendor->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('vendors.destroy', ['vendor'=>$Vendor->id]) }}" style="display: inline" method="POST">
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