

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Countries</div>

                <div class="card-body">
                <form action="{{ route('updatecity')}}" method="POST">
                @csrf
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $result->name }}"><br>
                    <label>Country</label>
                    <select class="form-control" name="country">
                
                        @foreach ($country as $row)
                            <option value ="{{ $row->name }}">{{ $row->name}}
                            </option>
                        @endforeach


                    </select>
                    <label>Order</label>
                    <input class="form-control" type="text" name="order" value="{{ $result->display_order }}"><br>
                    <label>Status</label>
                    <select class="form-control" name="status">
                        <option value="show" @if($result->status == 'show') selected @endif>Show</option>
                        <option  value="hide" @if($result->status == 'hide') selected @endif>Hide</option>
                    </select>
                    <br>
                    <input type="hidden" name="id" value="{{$result->id}}">
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
