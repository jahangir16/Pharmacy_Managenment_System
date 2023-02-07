@extends('Masterlayout.layout')

@section("mainContent")


<div class="parent">
    <div class="subparent">
        <form action="{{ route('customers.update', ['customer'=>$employee->id]) }}" method="post" class="w-50 mx-auto">
            @csrf
            @method("put")

            <div class="mb-3 mt-3" style="width: 100%">
                <label for="name" class="form-label">Enter Employee Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Customer Name"
                    name="name" value="{{$employee->name }}">
            </div>
            @csrf
            <div class="mb-3 mt-3" style="width: 100%">
                <label for="cnic" class="form-label">Enter Employee CNIC:</label>
                <input type="cnic" class="form-control" id="cnic"
                    placeholder="Enter Customer CNIC" name="cnic" value="{{$employee->cnic }}">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Select Employee gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" {{ $employee->gender == "male" ? "Checked":"" }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                    Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" {{ $employee->gender == "female" ? "Checked":"" }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
            </div>

            <div class="mb-3 mt-3" style="width:100%">
                <label for="phone" class="form-label">Enter Employee Phone:</label>
                <input type="text" class="form-control" id="phone"
                    placeholder="Enter Employee Phone" name="phone" value="{{$employee->phone}}">
            </div>

            <div class="mb-3">
                <label for="license" class="form-label">Employee has license:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="license" id="flexRadioDefault1" value="male" {{ $employee->license == "YES" ? "Checked":"" }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="license" id="flexRadioDefault2" value="female" {{ $employee->license == "NO" ? "Checked":"" }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>

                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Employee Date of Birth</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{$employee->date_of_birth }}">
                </div>

                <div class="mb-3">
                    <label for="joined_date" class="form-label">Employee joined Date</label>
                    <input type="date" name="joined_date" id="joined_date" class="form-control" value="{{$employee->joined_date }}">
                </div>
                <div class="mb-3">
                    <label for="leaving_date" class="form-label">Employee leaving date</label>
                    <input type="date" name="leaving_date" id="leaving_date" class="form-control" value="{{$employee->leaving_date}}">
                </div>


            <button type="submit" value="Save" class="btn btn-primary"
                style="width: 100%; background-color: rgb(46, 166, 46);border:2px rgb(46, 166, 46)">Submit</button>
        </form>
    </div>
</div>
@endsection