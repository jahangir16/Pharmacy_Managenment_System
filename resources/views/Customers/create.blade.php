@extends('Masterlayout.layout')

@section("mainContent")

<div class="parent">
    <div class="subparent">
        <form action="{{ route('customers.store') }}" method="post">
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Enter Customer Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Customer Name"
                    name="name">
            </div>
            @csrf
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="cnic" class="form-label">Enter Customer CNIC:</label>
                <input type="cnic" class="form-control" id="cnic"
                    placeholder="Enter Customer cnic" name="cnic">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Select Customer gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                    Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>

            <div class="mb-3 mt-3" style="width:100%">
                <label for="phone" class="form-label">Enter Customer Phone:</label>
                <input type="text" class="form-control" id="phone"
                    placeholder="Enter Customer phone" name="phone">
            </div>

        

            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection