@php 
    use App\Models\Customer;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer</div>
                <div class="card-body">
                   <table class="table table-striped">
                        <tr>
                            <td width="10px">S.N</td>
                            <td>Name</td>
                            <td>Interest</td>
                            <td width="150">Action</td>
                        <tr>
                        @php 
                            $count = 1;
                            $customerData = Customer::getAll();
                        @endphp
                        @foreach($customerData as $row)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->interest }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('editcustomer', ['id' =>  $row->id])}}">Edit</a> &nbsp; &nbsp;
                                <a class="btn btn-sm btn-danger"  href="{{ route('deletecustomer', ['id' =>  $row->id])}}">Delete</a>
                            </td>
                        <tr>
                        @php $count++; @endphp
                        @endforeach
                   </table>
                </div>

                <div class="card-footer">
                    <a href="{{ route('addcustomer') }}" class="btn btn-info">Add Customer</a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
