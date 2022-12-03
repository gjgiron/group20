@extends('layouts.app')

@section('content')
<?php
$result = DB::table('tablelist')->select('idTable')->pluck('idTable');
//$result = DB::table('tablelist')->get()

// @foreach ($result as $table)
//    <h4>{{$table}}</h4>
// @endforeach
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2> Please fill reservation information </h2>
                <form>
                    Name: <input type="text"> <br>
                    Phone: <input type="tel">  <br>
                    Email: <input type="text">  <br>
                    date: <input type="date" value="{{now()}}">  <br>
                    Number of guests: <input type="number">  <br>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection