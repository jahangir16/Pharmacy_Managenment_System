@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('medicinePackagings.update', ['medicinePackaging'=>$medicinePackaging->id]) }}" method="post" class="w-50 mx-auto">

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
            {{-- <div class="mb-3">
                <label for="medicine_id" class="form-label">Enter Medicine Name: </label>
                <select class="form-control" name="medicine_id" id="medicine_id">
                    @foreach($medicines as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div> --}}
            <div class="mb-3">
                <label for="pharmaceutical__packaging_id" class="form-label">Enter packaging Name: </label>
                <select class="form-control" name="pharmaceutical__packaging_id" id="pharmaceutical__packaging_id">
                    @foreach($packaging as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="weight" class="form-label">Enter weight/potency value:</label>
                <input type="text" class="form-control" id="weight" placeholder="Enter weight/potency value"
                    name="weight"value="{{$medicinePackaging->weight}}">
            </div>

            <div class="mb-3">
                <label for="selling_unit_id" class="form-label">Enter selling unit: </label>
                <select class="form-control" name="selling_unit_id" id="selling_unit_id">
                    @foreach($selling as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection