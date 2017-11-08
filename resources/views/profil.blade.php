<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')

@section('content')
    <script>
       function dodajVestinu(){

           var e = document.getElementById("inputKategorija");
           var strUser = e.options[e.selectedIndex].value;

           var url = 'vestina/' + strUser;
           window.location.replace(url);

       }
    </script>
    <?php
    $xx= DB::select('SELECT * FROM customer WHERE  id = ' . Auth::user()->id );
    ?>
    <div class="panel-group">
        <h2 id="Kompanija">Profil</h2>
        <div class="panel panel-default" style="padding:0!important;">

            <div class="panel-heading" ><i id="DetaljiKompanije"><?php echo $xx[0]->name;?></i></div>
            <div class="panel-body" >
            <div class="row">
            <div class="col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <img src="data:image/jpeg;base64,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" class="img-circle" style="width:100%">

                        <text><b><span class="glyphicon glyphicon-envelope"></span> E-mail:</b></text>
                        <text>korisnik@example.com</text>
                        </br>
                        <text><b><span class="glyphicon glyphicon-user"></span> Datum rodjenja:</b></text>
                        <text>31.02.1935.</text>
                        </br>
                        <text><b><span class="glyphicon glyphicon-phone"></span> Telefon:</b></text>
                        <text>063/123-456</text>
                        </br>
                        <text/><b><span class="glyphicon glyphicon-link"></span> Radno iskustvo:</b>
                        <br>
                        <ul id="listaposlova">
                            <li/>Nordeus - junior developer; 1 godina
                            <li/>Quantox - junior developer; 1 godina

                        </ul>
                        <center>
                            <button > Promeni </button>
                            <button > Sacuvaj </button>
                        </center>

                    </div>
                </div>
            </div>
                <div class="col-md-9 ">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                    </div>

                                    <div>
                                        <ul class="nav navbar-nav">
                                            <li id="dgm1" class="active" onclick="Dugme1()"><a style="cursor:pointer;" ><span  class="glyphicon glyphicon-plus"></span>Vestine</a></li>
                                            <li id="dgm2" onclick="Dugme2()"><a style="cursor:pointer;"><span  class="glyphicon glyphicon-star"></span>Moje prijave</a></li>
                                            <li id="dgm3" onclick="Dugme3()"><a style="cursor:pointer;"><span class="glyphicon glyphicon-book"></span> Kursevi</a></li>

                                        </ul>
                                    </div>

                                </div>
                            </nav>
                            <ul class="show" id="OpisKompanije">
                                <form class="form-horizontal" action="<?php echo url('vestina');?>" method="post" class="form-control">
                                <select id="inputKategorija" name="inputKategorija" class="form-control">
                                    <?php
                                    $kat = DB::SELECT('SELECT * FROM category');
                                    foreach($kat as $x) {
                                        echo '<option value="' . $x->category_id . '"> ' . $x->name . '</option>';
                                    }
                                    ?>
                                </select>

                                <a onclick="dodajVestinu();" type="submit" class="btn btn-default">
                                    Dodaj vestinu
                                </a>
                                </form>
                                <hr>
                                <?php
                                $tmp = DB::SELECT('SELECT * FROM polozene_vestine WHERE user_id='. Auth::user()->id);

                                foreach($tmp as $elem){
                                        $tmp2=DB::SELECT('SELECT * FROM test WHERE id='. $elem->test_id.' and firma=0');
                                       foreach($tmp2 as $elem2){
                                           $tmp3=DB::SELECT('SELECT * FROM category WHERE category_id='. $elem2->kategorija);
                                            echo $tmp3[0]->name." - $elem->score% <br>";

                                       }
                                }
                                ?>
                            </ul>
                            <ul class="hidden" id="OglasKompanije">
                                                <?php
                                $tmp = DB::SELECT('SELECT * FROM prijavljen WHERE id_user='. Auth::user()->id);
                                foreach($tmp as $elem){
                                    $tmp2=DB::SELECT('SELECT * FROM posao WHERE id='. $elem->id_posla);
                                    foreach($tmp2 as $elem2){
                                        echo $elem2->naziv." - ".$elem2->pozicija;

                                    }

                                }
                                ?>
                            </ul>

                            <ul  class="hidden" id="GalerijaKompanije">
                                <a href="#" type="submit" class="btn btn-default">
                                    Dodaj kurs
                                </a>
                                <hr>
                                <a href="https://www.tutorialspoint.com">https://www.tutorialspoint.com</a>
                                <?php
                               // AdminController::printTests();
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

@endsection

<script>

    function Dugme1(){
        document.getElementById("OpisKompanije").className="show";
        document.getElementById("OglasKompanije").className="hidden";
        document.getElementById("GalerijaKompanije").className="hidden";

        document.getElementById("dgm1").className="active";
        document.getElementById("dgm2").className="";
        document.getElementById("dgm3").className="";

    }
    function Dugme2(){
        document.getElementById("OpisKompanije").className="hidden";
        document.getElementById("OglasKompanije").className="show";
        document.getElementById("GalerijaKompanije").className="hidden";

        document.getElementById("dgm1").className="";
        document.getElementById("dgm2").className="active";
        document.getElementById("dgm3").className="";

    }
    function Dugme3(){
        document.getElementById("OpisKompanije").className="hidden";
        document.getElementById("OglasKompanije").className="hidden";
        document.getElementById("GalerijaKompanije").className="show";

        document.getElementById("dgm1").className="";
        document.getElementById("dgm2").className="";
        document.getElementById("dgm3").className="active";

    }
</script>