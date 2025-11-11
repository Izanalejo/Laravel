@extends('layouts/myTemplate')


@section('content')
<p>Hola soc l'index.blade.php</p>
<?php 
    if(2+3==4){
        echo "Això és cert, 2+3 és 4";
    }else{
        echo "És fals, 2+3 no és 4";
    }
?>
<br>

@if(2+3==4)
    Això és cert, 2+3 és 4
@else
    És fals, 2+3 no és 4
@endif

@endsection