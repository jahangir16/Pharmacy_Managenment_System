@extends('Masterlayout.layout')

@section("mainContent")

<div class="parent">
    <div class="subparent">
        <form action="{{ route('medicines.store') }}" method="post">
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Enter Medicine Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Customer Name"
                    name="name">
                    
            </div>
            @csrf
            <div class="mb-3">
                <label for="category_id" class="form-label">Medicine Category: </label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($category as $item)
                
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="manafacture_id" class="form-label">Medicine Manafacture: </label>
                <select class="form-control" name="manafacture_id" id="manafacture_id">
                    @foreach($manafacture as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="chemical_formula_id" class="form-label">Medicine Chemical Formula: </label>
                <select class="form-control" name="chemical_formula_id" id="chemical_formula_id">
                    @foreach($chemicalFormula as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            <label for="usage_id" class="form-label">Usage Name: </label>
            <select class="js-example-basic-multiple form-control" name="usage_id[]" id="usage_id" multiple>
                @foreach($usage as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
              <label for="info" class="form-label">Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</label>
<br>

        

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection