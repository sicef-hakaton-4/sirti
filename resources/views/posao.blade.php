<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', 'Rangiranje')

@section('content')
    <h1>Rangiranje kandidata</h1>


    <?php
    $nemoze=false;
    usort($data, function($b, $a) {
        return $a['1'] <=> $b['1'];
    });
    $k=1;
    foreach($data as $elem){

    ?>
    <div class="well search-result">
        <div class="row">

            <div class="col-md-12">

            <?php echo "$k. Kandidat: $elem[0] - $elem[1]"; $k++;?>

            </div>


        </div>

    </div>
    <?php

    }
    ?>
@endsection