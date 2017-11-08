<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', $naziv)

@section('content')
    <h1>Oglas</h1>


    <?php
    $nemoze=false;
    foreach($data as $elem){

    ?>
    <div class="well search-result">
        <div class="row">

            <div class="col-md-12">
                <h3><?php echo "($elem->pozicija) $elem->naziv"; ?></h3>
                <p>Istice: <strong><?php echo $elem->istice; ?> </strong></p>
                <h4><i>
                        <?php
                        $nick = DB::select("SELECT u.username FROM users as u WHERE u.id =" . $elem->firma);
                        $link = url('user') . '/' . $elem->firma;
                        foreach($nick as $nk){
                            echo "<a style='margin:2px;' href='" . $link . "'>" . $nk->username . "</a><br><br>";
                        }


                        $tags = DB::select("SELECT * FROM posao_vestine WHERE posao =" . $elem->ID);

                        foreach($tags as $elemY){
                            //var_dump($tags);
                            $tek = DB::select("SELECT * FROM category WHERE category_id =" . $elemY->kategorija);
                            foreach($tek as $elemX)
                            {
                                if(isset(Auth::user()->id))$pol = DB::select("SELECT * FROM polozene_vestine WHERE test_id =" . $elemY->kategorija." AND user_id=". Auth::user()->id);
                                else $pol = DB::select("SELECT * FROM polozene_vestine WHERE test_id =" . $elemY->kategorija);

                                if(count($pol)){
                                    echo '<span class="label label-primary" style="margin:2px;margin-top:0px;">'.$elemX->name.'</span>';
                                }else
                                {
                                    $nemoze=true;
                                    echo '<span class="label label-danger" style="margin:2px;margin-top:0px;">'.$elemX->name.'</span>';
                                }
                            }
                        }

                        ?>
                    </i></h4>
                <hr>
                <?php echo $elem->opis; ?>


            </div>


        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">

                <?php
                $tss="";
                if($nemoze)$tss="  ";
                echo '<a  type="button" class="btn btn-primary '.$tss.'" style="width:100%;margin-top:10px;"'."href='" . url('prijava') . '/' . $elem->ID . "'>" . 'Prijavi se...</a>';

                ?>

            </div>
        </div>
    </div>
    <?php

    }
    ?>
@endsection