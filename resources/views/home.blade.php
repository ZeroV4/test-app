@extends("layouts")

@section("content")
    <h1>Home</h1>


<?php
$elev = array("Rusu Dan", "Pocitaru Constantin", "Zuza Marius");
$summa = 0;
?>

@foreach($elev as $key =>$value)
    
@if ($value == "Rusu Dan")
Nota Zece

@else
Nota opt
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
