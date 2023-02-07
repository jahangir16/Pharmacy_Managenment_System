@extends('Masterlayout.layout')

@section("mainContent")

<div class="container">
    <a href="{{ route('medicines.create') }}" class="btn btn-primary m-3">Add a new Medicines</a>
    <table class="table w-75 mx-auto mt-5 table-dark table-bordered table-primary ">
        <tr class="table-primary">
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Manafacture</th>
            <th>Chemical Formula</th>
            <th> Usages </th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->category->name}}</td>
                <td>{{$customer->manafacture->name}}</td>
                <td>{{$customer->chemicalFormula->name}}</td>
                <td>
                @foreach ($customer->usages as $item)
                    {{$item->name}},
                @endforeach
                </td>
                <td>
                    {{-- <a href="{{ route('medicines.show', ['medicine'=>$medicine->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> |  --}}
                    <a href="{{ route('medicines.edit', ['medicine'=>$customer->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('medicines.destroy', ['medicine'=>$customer->id]) }}" style="display: inline" method="POST">
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