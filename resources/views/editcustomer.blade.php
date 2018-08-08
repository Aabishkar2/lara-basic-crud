

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customers</div>

                <div class="card-body">
                <form action="{{ route('updatecustomer')}}" method="POST">
                @csrf
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $result->name }}"><br>
                    
                    <label>Interest</label>
                    <?php   
                          $interests = explode(",", $result->interest);
                    ?>
                    <input type="checkbox"   name="interest[]" value="sports"  @if(strpos($result->interest, 'sports') !== false) checked @endif>Sports</input> 
                     <?php 
                                            // foreach($interests as $interest){
                                            
                                            //     if(strcmp($interest,"sports")){
                                            //         echo "checked";
                                            //     }   
                                            // }
                                            //     ?>
                                            <!-- >Sports</input>  --> 
                    <input type="checkbox"  name="interest[]" value="music" @if(strpos($result->interest, 'music') !== false) checked @endif>Music</input> 
                                            <!-- <?php 
                                            // foreach($interests as $interest){
                                            //     if(strcmp($interest,"music")){
                                            //         echo "checked";
                                            //     }   
                                            // }
                                            //     ?>>Music</input> -->
                    <input type="checkbox"  name="interest[]" value="internet" @if(strpos($result->interest, 'internet') !== false) checked @endif>Internet</input>
                                            <!-- <?php 
                                            // foreach($interests as $interest){
                                            //     if(strcmp($interest,"internet")){
                                            //         echo "checked";
                                            //     }   
                                            // }
                                            //     ?>
                                            >Internet</input>
                                            -->
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
