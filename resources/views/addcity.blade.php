
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cities</div>

                <div class="card-body">
                <form action="{{ route('addcityaction')}}" method="POST">
                @csrf
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Name"><br>
                    <label>Country</label>
                    <select class="form-control" name="country">
                     
                      
                            @foreach ($country as $row)
                            <option value ="{{ $row->name }}">{{ $row->name}}
                            </option>
                            @endforeach
                          
                    </select>
                    <br>
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
                    <a href="{{ route('addcity') }}" class="btn btn-info">Add City</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
