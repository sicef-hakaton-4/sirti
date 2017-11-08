<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', $naziv)

@section('content')
    <h1>Testiranje</h1>

<?php
$idi="";
foreach($data as $elem){
    $idi=$idi.$elem->id.';';

}
$idi=$idi.$idt;
        ?>
<script>

    setInterval(function() {
       var vr;
        vr= $('#vremebrate').val();
        vr= vr-1;
        if(vr==0)$( "#posdg" ).submit();
        $('#vremebrate').val(vr);
        $('#vreme22').html(vr);
    }, 1000);
</script>
    <input type="hidden" id="vremebrate" value="{{$vreme}}">
    <div class="panel panel-default">
        <div class="panel-heading">Preostalo: <i id="vreme22">{{$vreme}}</i></div>
        <div class="panel-body">
            <div class="col-md-12">
                <form id="posdg" class="form-horizontal" action="<?php echo url('dodajprijavu2/'.$idi);?>" method="post" class="form-control">
                    {{ csrf_field() }}

                    <label for="Ime" class="col-sm-2 control-label">Godine iskustva:</label>
                    <div class="form-group">

                        <div class="col-sm-3">
                            <div  id="inputIme2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <input  type="number" class="form-control" id="inputTrajanje" name="inputTrajanje" placeholder="2">

                            </div> </div>
                    </div>

<?php

                    foreach($data as $elem){


                    $tmp=Array();
                    array_push($tmp, $elem->odgovor1, $elem->odgovor2,$elem->odgovor3,$elem->odgovor4);
                    shuffle($tmp);
                        ?>

                    <div class="form-group">
                        <div class="row"><div class="col-md-12">
                        <label>{{$elem->pitanje}}</label><br>

                        <?php
                            foreach($tmp as $odg){
                                if($odg==$elem->odgovor1){
                                 echo '<input type="radio" name="'.$elem->id.'" value="1"> '.$odg.'<br>';
                                }
                                else{
                                    echo '<input type="radio" name="'.$elem->id.'" value="0"> '.$odg.'<br>';
                                }

                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                                        <hr>

                    <div class="form-group">
                        <button type="submit"  class="btn btn-primary">
                            Posalji
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection