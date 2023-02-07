@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('units.create') }}" class="btn btn-primary m-3">Add a new  Selling Units</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Selling Units</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $sellingUnit)
            <tr>
                <td>{{$sellingUnit->id}}</td>
                <td>{{$sellingUnit->name}}</td>
                <td>
                    {{-- <a href="{{ route('manafacture.show', ['manafacture'=>$manafacture->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('units.edit', ['unit'=>$sellingUnit->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('units.destroy', ['unit'=>$sellingUnit->id]) }}" style="display: inline" method="POST">
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