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
            <th>License</th>
            <th>Actions</th>
        </tr>
        @foreach($abc as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->cnic}}</td>
                <td>{{$employee->gender}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->license}}</td>
                <td>
                    <a href="{{ route('employees.show', ['employee'=>$employee->id]) }}" class="btn btn-success btn-sm"><i class="fa-sharp fa-solid fa-eye"></i></a> | 
                    <a href="{{ route('employees.edit', ['employee'=>$employee->id]) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square text-light"></i></a> | 
                    <form action="{{ route('employees.destroy', ['employee'=>$employee->id]) }}" style="display: inline" method="POST">
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