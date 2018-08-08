@php 
    use App\Models\State;
@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">State</div>
                <div class="card-body">
                   <table class="table table-striped">
                        <tr>
                            <td width="10px">S.N</td>
                            <td width="70px">Name</td>
                            <td width="70px">Code</td>
                            <td>Country Name</td>
                            <td width="50">Order</td>
                            <td width="80">Status</td>
                            <td width="150">Action</td>
                        <tr>
                        @php 
                            $count = 1;
                            $stateData = State::getAll();
                        @endphp
                        @foreach($stateData as $row)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->country_id }}</td>
                            <td>{{ $row->display_order }}</td>
                            <td>{{ $row->status }}</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('editstate', ['id' =>  $row->id])}}">Edit</a> &nbsp; &nbsp;
                                <a class="btn btn-sm btn-danger"  href="{{ route('deletestate', ['id' =>  $row->id])}}">Delete</a>
                            </td>
                        <tr>
                        @php $count++; @endphp
                        @endforeach
                   </table>
                </div>

                <div class="card-footer">
                    <a href="{{ route('addstate') }}" class="btn btn-info">Add State</a>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
