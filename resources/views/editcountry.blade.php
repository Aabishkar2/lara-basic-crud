

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Countries</div>

                <div class="card-body">
                <form action="{{ route('updatecountry')}}" method="POST">
                @csrf
                    <label>Code</label>
                    <input class="form-control" type="text" name="code" value="{{ $result->code }}"><br>
                    <label>Name</label>
                    <select id="countr" class="form-control" name="name" >
                        <option value="">Select Country</option>
                        <option value="England" @if($result->name == 'England') selected @endif>England</option>
                        <option  value="Australia" @if($result->name == 'Australia') selected @endif>Australia</option>
                        <option  value="United States" @if($result->name == 'United States') selected @endif>United States</option>
                    </select>
                    <br>
                    <label>State</label>
                        <select id="state" class="form-control" name="state" value="{{ $result->state}}"> </select>  <br>
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
                    <a href="{{ route('addcountry') }}" class="btn btn-info">Add Country</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	jQuery(function($) {
    var states = {
        'England': ['Manchester','Liverpool','Chelsea'],
        'Australia': ['Sydney','Melbourne','Perth'],
        'United States': ['Texas','Chicago','Virginia'],
        
    }
    
    var $states = $('#state');
    $('#countr').change(function () {
        var state = $(this).val(), lcns = states[state] || [];
        var html = $.map(lcns, function(lcn){
            return '<option value="' + lcn + '">' + lcn + '</option>'
        }).join('');
        $states.html(html)
    });
});
</script>
@endsection