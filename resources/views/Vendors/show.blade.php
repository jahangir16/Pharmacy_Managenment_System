@extends('Masterlayout.layout')

@section("mainContent")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                {{$vendor->name}}
            </div>
        </div>
        <div class="card-body">
            <p><strong>Email: </strong> {{$vendor->email}}</p>
            <p><strong>Phone: </strong>{{$vendor->phone}}</p>
            <p><strong>Address: </strong> {{$vendor->address}}</p>
            
        </div>
    </div>
</div>
@endsection