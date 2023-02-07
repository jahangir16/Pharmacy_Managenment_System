@extends('Masterlayout.layout')

@section("mainContent")

<div class="parent">
    <div class="subparent">
        <form action="{{ route('medicinesGenerics.store') }}" method="post">
          @csrf
            <div class="mb-3">
                <label for="medicine_id" class="form-label">Enter Medicine Name: </label>
                <select class="form-control" name="medicine_id" id="medicine_id">
                    @foreach($medicines as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>
            <div class="mb-3">
                <label for="generic_id" class="form-label">Enter Generic: </label>
                <select class="form-control" name="generic_id" id="generic_id">
                    @foreach($generic as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Enter Generic value:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Generic value"
                    name="name">
            </div>

        

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection