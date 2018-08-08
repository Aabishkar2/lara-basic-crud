

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Countries</div>
              
                <div class="card-body">
                    <form action="{{ route('addcountryaction')}}" method="POST" name="frm">
                    @csrf
                    <label>Code</label>
                    <input class="form-control" type="text" name="code" placeholder="Code"><br>
                    

                    <label>Name</label>
                    <select id="name" name="name" class="form-control">
                    <option value="">---</option>
                    <option value="Australia">Australia</option>
                    <option value="England">England</option>
                    <option value="United States"> United States</option>
                    </select>
                    <br>
                    <label>State</label>
                    <select id="state" class="form-control" name="state">

                        <option value="">---</option>
            
                        <option value="Manchestor" class="England">Manchestor</option>
                        <option value="Liverpool" class="England">Liverpool</option>
                        <option value="Chealsea" class="England">Chealsea</option>

                        <option value="Sydney" class="Australia" >Sydney</option>
                        <option value="Melbourne" class="Australia">Melbourne</option>
                        <option value="Perth" class="Australia">Perth</option>

                        <option value="Chicago" class="United States" >Chicago</option>
                        <option value="Virginia" class="United States">Virginia</option>
                        <option value="Texas" class="United States">Texas</option>
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
                    <a href="{{ route('addcountry') }}" class="btn btn-info">Add Country</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $("#state").chained("#name");

   // $("#country").change(function(){
   //     alert("testing");
   // });
//    $( document ).ready(function() {
//     console.log( "ready!" );
//     });
//    $(".target").click(function() {
//         console.log( "Handler for .change() called." );
//     });



</script>
@endsection
