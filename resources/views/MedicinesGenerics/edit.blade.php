@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('medicinesGenerics.update', ['medicinesGeneric'=>$medicinesGeneric->id]) }}" method="post" class="w-50 mx-auto">

            <div class="mb-3">
                <label for="manafacture_id" class="form-label">Enter Medicine Name: </label>
                <select class="form-control" name="manafacture_id" id="manafacture_id">
                    @foreach($medicines as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="chemical_formula_id" class="form-label">Medicine Chemical Formula: </label>
                <select class="form-control" name="chemical_formula_id" id="chemical_formula_id">
                    @foreach($generic as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Enter Generic value:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Generic value"
                    name="name" value="{{$medicinesGeneric->name}}">
            </div>

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection