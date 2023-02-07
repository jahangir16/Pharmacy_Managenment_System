@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('chemicals.create') }}" class="btn btn-primary m-3">Add a new Chemical Formula</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $chemical)
            <tr>
                <td>{{$chemical->id}}</td>
                <td>{{$chemical->name}}</td>
                <td>
                    {{-- <a href="{{ route('manafacture.show', ['manafacture'=>$manafacture->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('chemicals.edit', ['chemical'=>$chemical->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('chemicals.destroy', ['chemical'=>$chemical->id]) }}" style="display: inline" method="POST">
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