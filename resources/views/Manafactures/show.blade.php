@extends('Masterlayout.layout')

@section("mainContent")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                {{$manafacture->name}}
            </div>
        </div>
        <div class="card-body">
            <p><strong>Email: </strong> {{$manafacture->email}}</p>
            <p><strong>Phone: </strong>{{$manafacture->phone}}</p>
            <p><strong>Address: </strong> {{$manafacture->address}}</p>
            
        </div>
    </div>
</div>
@endsection