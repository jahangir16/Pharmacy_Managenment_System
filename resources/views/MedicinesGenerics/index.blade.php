@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('medicinesGenerics.create') }}" class="btn btn-primary m-3">Add a new Generic value</a>
    <table class="table w-75 mx-auto mt-5">
        <tr>
            <th>Id</th>
            <th>Medicine Name</th>
            <th>Generic</th>
            <th>Value</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $customer)
            <tr>
              
                <td>{{$customer->id}}</td>
                <td>{{$customer->medicine->name}}</td>
                <td>{{$customer->generic->name}}</td>
                <td>{{$customer->name}}
                <td>
                    {{-- <a href="{{ route('medicines.show', ['medicine'=>$medicine->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('medicinesGenerics.edit', ['medicinesGeneric'=>$customer->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('medicinesGenerics.destroy', ['medicinesGeneric'=>$customer->id]) }}" style="display: inline" method="POST">
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