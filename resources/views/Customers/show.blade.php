@extends('Masterlayout.layout')

@section("mainContent")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                {{$customer->name}}
            </div>
        </div>
        <div class="card-body">
            <p><strong>CNIC: </strong> {{$customer->cnic}}</p>
            <p><strong>Gender: </strong> {{$customer->gender}}</p>
            <p><strong>Phone: </strong>{{$customer->phone}}</p>
            
        </div>
    </div>
</div>
@endsection