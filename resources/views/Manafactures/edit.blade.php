@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('manafacture.update', ['manafacture'=>$manafacture->id]) }}" method="post" class="w-50 mx-auto">
            @csrf
            @method("put")

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Manufacturer Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Manufacturer Name"
                    name="name"
                    value="{{$manafacture->name}}">
            </div>
            @csrf
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="email" class="form-label">Manufacturer Email:</label>
                <input type="email" class="form-control" id="email"
                    placeholder="Enter Manufacturer Email" name="email" value="{{$manafacture->email }}">
            </div>
            <div class="mb-3 mt-3" style="width:100%">
                <label for="phone" class="form-label">Manufacturer Phone:</label>
                <input type="text" class="form-control" id="phone"
                    placeholder="Enter Manufacturer Phone" name="phone" value="{{$manafacture->phone}}">
            </div>

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="address" class="form-label">Manufacturer Address:</label>
                <input type="text" class="form-control" id="address"
                    placeholder="Enter manufacturer Address" name="address" value="{{$manafacture->address}}">
            </div>
            

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection