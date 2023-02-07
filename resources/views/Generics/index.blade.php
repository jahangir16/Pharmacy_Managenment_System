@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('namegenerics.create') }}" class="btn btn-primary m-3">Add a new Generic </a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>ID</th>
            <th>Generics</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $generic)
            <tr>
                <td>{{$generic->id}}</td>
                <td>{{$generic->name}}</td>
                <td>
                    {{-- <a href="{{ route('manafacture.show', ['manafacture'=>$manafacture->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('namegenerics.edit', ['namegeneric'=>$generic->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('namegenerics.destroy', ['namegeneric'=>$generic->id]) }}" style="display: inline" method="POST">
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