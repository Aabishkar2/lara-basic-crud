
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customers</div>

                <div class="card-body">
                <form action="{{ route('addcustomeraction')}}" method="POST">
                @csrf
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name"><br>

                    <label>Interest</label>
                    <input type="checkbox"   name="interest[]" value="sports">Sports</input> 
                    <input type="checkbox"  name="interest[]" value="music">Music</input> 
                    <input type="checkbox"  name="interest[]" value="internet">Internet</input>
                    <br>
                    <br>



                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                </div>

                <div class="card-footer">
                    <a href="{{ route('addcustomer') }}" class="btn btn-info">Add Customer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
