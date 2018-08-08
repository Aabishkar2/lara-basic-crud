
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">States</div>

                <div class="card-body">
                <form action="{{ route('addstateaction')}}" method="POST">
                @csrf
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name"><br>

                    <label>Code</label>
                    <input class="form-control" type="text" name="code" placeholder="Code"><br>

                    <label>Country</label>
                    <input class="form-control" type="text" name="countryid" placeholder="Code"><br>
                 
                    <label>Order</label>
                    <input class="form-control" type="text" name="order" placeholder="order"><br>
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="show">Show</option>
                        <option  value="hide">Hide</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                </div>

                <div class="card-footer">
                    <a href="{{ route('addstate') }}" class="btn btn-info">Add State</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
