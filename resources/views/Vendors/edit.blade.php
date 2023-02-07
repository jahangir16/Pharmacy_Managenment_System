@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('vendors.update', ['vendor'=>$vendor->id]) }}" method="post" class="w-50 mx-auto">
            @csrf
            @method("put")

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">vendor Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter vendor Name"
                    name="name"
                    value="{{$vendor->name}}">
            </div>
            @csrf
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="email" class="form-label">vendor Email:</label>
                <input type="email" class="form-control" id="email"
                    placeholder="Enter vendor Email" name="email" value="{{$vendor->email }}">
            </div>
            <div class="mb-3 mt-3" style="width:100%">
                <label for="phone" class="form-label">vendor Phone:</label>
                <input type="text" class="form-control" id="phone"
                    placeholder="Enter vendor Phone" name="phone" value="{{$vendor->phone}}">
            </div>

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="address" class="form-label">vendor Address:</label>
                <input type="text" class="form-control" id="address"
                    placeholder="Enter vendor Address" name="address" value="{{$vendor->address}}">
            </div>
            

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection