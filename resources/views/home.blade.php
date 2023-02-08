@extends("layouts")

@section("content")
    <h1>Home</h1>


<?php
$elev = array("Popa Vadim", "Pocitaru Constantin", "Rusu Dan", "Plastelin Daniel");
$summa = 0;
?>

@foreach($elev as $key =>$value)
    
@if ($value == "Popa Vadim")
10

@else
9
@endif

@endforeach
<br>
@for($i=0; $i < 100; $i++)

@if ($i % 2 == 0)
@php
$summa = $summa +$i
@endphp

@endif
@endfor


Suma este {{$summa}}

@endsection
