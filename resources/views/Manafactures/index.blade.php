@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('manafacture.create') }}" class="btn btn-primary m-3">Add a new Manufacturer</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $manafacture)
            <tr>
                <td>{{$manafacture->id}}</td>
                <td>{{$manafacture->name}}</td>
                <td>{{$manafacture->email}}</td>
                <td>{{$manafacture->phone}}</td>
                <td>{{$manafacture->address}}</td>
                <td>
                    <a href="{{ route('manafacture.show', ['manafacture'=>$manafacture->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> | 
                    <a href="{{ route('manafacture.edit', ['manafacture'=>$manafacture->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('manafacture.destroy', ['manafacture'=>$manafacture->id]) }}" style="display: inline" method="POST">
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