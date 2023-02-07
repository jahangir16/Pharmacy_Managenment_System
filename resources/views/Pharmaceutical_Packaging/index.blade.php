@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('packagings.create') }}" class="btn btn-primary m-3">Add a new Pharmaceutical Packaging</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Pharmaceutical Packaging Name</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $pharmaceuticalPackaging)
            <tr>
                <td>{{$pharmaceuticalPackaging->id}}</td>
                <td>{{$pharmaceuticalPackaging->name}}</td>
                <td>
                    {{-- <a href="{{ route('manafacture.show', ['manafacture'=>$manafacture->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('packagings.edit', ['packaging'=>$pharmaceuticalPackaging->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('packagings.destroy', ['packaging'=>$pharmaceuticalPackaging->id]) }}" style="display: inline" method="POST">
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