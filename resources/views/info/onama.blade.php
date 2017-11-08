<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', 'Pregled')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Promene na popularnim sajtovima</div>
        <div class="panel-body">
            <?php
            $st = DB::select("SELECT * FROM promene WHERE promena=1");
            foreach($st as $elem){
            echo '<div class="well">';
            echo  "<b><a href='$elem->url'>$elem->sajt</a></b> - Bilo je promene u prethodnih 5 dana</div>";
                }
                ?>
        </div>
    </div>
@endsection