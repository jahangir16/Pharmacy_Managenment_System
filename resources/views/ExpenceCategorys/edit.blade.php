@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('expencecategorys.update', ['expencecategory'=>$expenceCategory->id]) }}" method="post" class="w-50 mx-auto">
            @csrf
            @method("put")

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label"> Enter Expence Type:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Expence Type Name"
                    name="name"
                    value="{{$expenceCategory->name}}">
            </div>
            @csrf
            
            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection