<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', 'Pretraga')

@section('content')

    <h1>Rezultati pretrage</h1>
    <h2>Pronađena su <strong><?php echo $size; ?></strong> rezultata:</h2>

<style>
    .tabcl{
        background-color: #c5c8cc;
    }
</style>
    <div id="exTab3" class="container">
        <ul class="nav nav-pills">

            <li  id="taba_1" class="active">
                <a href="#1tab" onclick="promeniakta(1)" class="tabcl" data-toggle="tab">1</a>
            </li>


            <?php
            if(sizeof($data) > 0){
            $xx = 0;
            $tab = 1;
            foreach ($data as $elem) {
                $xx++;
                if (($xx % 10) == 0) {
                    $tab++;
                    echo ' <li id="taba_' . $tab . '"  ><a   onclick="promeniakta('.$tab.')"  class="tabcl" href="#' . $tab . 'tab" data-toggle="tab">' . $tab . '</a></li>';

                }
            }
            echo '</ul><br><div class="tab-content clearfix">';
            $xx = 0;
            $tab = 1;
            foreach($data as $elem){

            if (($xx % 10) == 0) {

                if ($xx == 0) {
                    echo ' <div class="tab-pane active" id="' . $tab . 'tab">';
                } else {
                    echo ' <div class="tab-pane" id="' . $tab . 'tab">';
                }
            }


            ?>
            <div class="well search-result">
                <div class="row">


                    <div class="col-md-9">
                        <h3><?php echo $elem->naziv; ?></h3>
                        <h4><i>
                                <?php
                                    $nick = DB::select("SELECT u.username FROM users as u WHERE u.id =" . $elem->firma);
                                            $link = url('user') . '/' . $elem->firma;

                                        echo "<a style='margin:2px;' href='" . $link . "'>" . $nick[0]->username . "</a><br><br>";

                                $tags = DB::select("SELECT * FROM posao_vestine WHERE posao =" . $elem->ID);
                                foreach($tags as $elemY){
                               //var_dump($tags);
                                $tek = DB::select("SELECT * FROM category WHERE category_id =" . $elemY->kategorija);
                                foreach($tek as $elemX)
                                    {
                                        $pol = DB::select("SELECT * FROM polozene_vestine WHERE test_id =" . $elemY->kategorija." AND user_id=". Auth::user()->id);
                                        if(count($pol)){
                                            echo '<span class="label label-primary" style="margin:2px;margin-top:0px;">'.$elemX->name.'</span>';
                                        }else
                                            {
                                        echo '<span class="label label-danger" style="margin:2px;margin-top:0px;">'.$elemX->name.'</span>';
                                        }
                                    }
                                }

                                ?>
                            </i></h4>

                        <p>Istice: <strong><?php echo $elem->istice; ?> </strong></p>
                    </div>
                    <div class="col-md-3">

                        <?php
                        echo "<a href='" . url('advert') . '/' . $elem->ID . "'>" . '<button type="button" class="btn btn-primary" style="width:100%;margin-top:10px;">Vise...</button></a>';

                        ?>

                    </div>

                </div>
            </div>

            <?php
        $xx++;
            if (($xx % 10) == 0) {

                echo " </div>";
                $tab++;
            }

            }
            ?>
        </div></div>
    <ul class="nav nav-pills">

        <li id="tabb_1" class="active">
            <a  href="#1tab" onclick="promeniakt(1)" class="tabcl" data-toggle="tab">1</a>
        </li>
<script>
tact=1;
    function promeniakt(it)
    {

        aj='taba_'+tact;
        document.getElementById(aj).className="";
        aj='taba_'+it;
        document.getElementById(aj).className="active";
        tact=it;
    }
function promeniakta(it)
{

    aj='tabb_'+tact;
    document.getElementById(aj).className="";
    aj='tabb_'+it;
    document.getElementById(aj).className="active";
    tact=it;
}
</script>
        <?php


        $xx = 0;
        $tab = 1;
        foreach ($data as $elem) {
            $xx++;
            if (($xx % 10) == 0) {
                $tab++;
                echo ' <li id="tabb_' . $tab . '" ><a  onclick="promeniakt('.$tab.')"  class="tabcl" href="#' . $tab . 'tab" data-toggle="tab">' . $tab . '</a></li>';

            }
        }
        echo '</ul>';
        ?>
    </div>
            <?php
            }else
            {
            ?>
            <div class="well search-result">
                <div class="row">

                    Ni jedan oglas ne ispunjava uneti parametar pretrage...

                </div>
            </div>
    <?php

    }
    ?>
@endsection
