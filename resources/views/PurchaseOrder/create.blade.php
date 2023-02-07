@extends('Masterlayout.layout')

@section("mainContent")

<div class="parent">
    <div class="subparent">
        <form action="{{ route('medicinePackagings.store') }}" method="post">
          @csrf

          <div class="mb-3">
            <label for="medicine_packaging_id" class="form-label">Enter selling unit: </label>
            <select class="form-control" name="medicine_packaging_id" id="medicine_packaging_id">
                @foreach($packaging as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
        </div>
          <div class="mb-3">
            <label for="vendor_id" class="form-label">Enter selling unit: </label>
            <select class="form-control" name="vendor_id" id="vendor_id">
                @foreach($vendor as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
        </div>
        
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="order_quantity" class="form-label">Enter Order Quantity:</label>
                <input type="text" class="form-control" id="order_quantity" placeholder="Enter order quantity"
                    name="order_quantity">
            </div>
            <div class="mb-3">
                <label for="order_date" class="form-label">Enter Order Date</label>
                <input type="date" name="order_date" id="order_date" class="form-control">
            </div>

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection