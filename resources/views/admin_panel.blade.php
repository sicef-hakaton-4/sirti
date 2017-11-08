<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.sablon')

@section('title', 'Admin Panel')

@section('glavni_sadrzaj')
    <div class="panel-group">
    <h2 id="Kompanija">Kompanija</h2>
    <div class="panel panel-default" style="padding:0!important;">

        <div class="panel-heading" ><i id="DetaljiKompanije">Detalji o kompaniji</i></div>
        <div class="panel-body" >
            <!-------------------------------- TELO -->
            <?php
            use App\Http\Controllers\AdminController;
            AdminController::load();
            ?>
            <center><img src="http://via.placeholder.com/150x150?text=Logo+Firme" class="img-responsive" alt="Logo-Kompanije" id="LogoKompanije"  style="height: 150px "></img></center>
            <div class="row" style="margin-top:1em;">
                <div class="col-sm-6"  >
                    <center><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;Telefon:  <i id="TelKompanije">+381 12 234-567</i></center>
                </div>
                <div class="col-sm-6" >
                    <center><span class="glyphicon glyphicon-send"></span>&nbsp;E-Mail:  <i id="MailKompanije">info@example.com</i></center>
                </div>

            </div>
            <hr>
            <div class="row" >
                <div class="col-sm-6"  >
                    <center><span class="glyphicon glyphicon-home"></span>&nbsp;Adresa:  <i id="AdrKompanije">+381 12 234-567</i></center>
                </div>
                <div class="col-sm-6" >
                    <center><span class="glyphicon glyphicon-flag"></span>&nbsp;GPS Lokacija:  <i id="LokKompanije">44.55, 41.22</i></center>
                </div>
            </div>
            <hr>
            <!----------------TELO TEXT ----------->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>

                    <div>
                        <ul class="nav navbar-nav">
                            <li id="dgm1" class="active" onclick="Dugme1()"><a style="cursor:pointer;" ><span  class="glyphicon glyphicon-info-sign"></span> O kompaniji</a></li>
                            <li id="dgm2" onclick="Dugme2()"><a style="cursor:pointer;"><span class="glyphicon glyphicon-list-alt"></span> Oglasi kompanije</a></li>
                            <li id="dgm3" onclick="Dugme3()"><a style="cursor:pointer;"><span class="glyphicon glyphicon-question-sign"></span> Testovi</a></li>

                        </ul>
                    </div>

                </div>
            </nav>
            <ul class="show" id="OpisKompanije">NEKI TEST</ul>
            <ul class="hidden" id="OglasKompanije">
                <a href="{{url('dodaj_posao')}}" type="submit" class="btn btn-default">
                    Dodaj oglas
                </a>
                <hr>
                <?php
                AdminController::printPosao();
                ?>
            </ul>

            <ul  class="hidden" id="GalerijaKompanije">
                <a href="{{url('dodaj_oglas')}}" type="submit" class="btn btn-default">
                    Dodaj test
                </a>
                <hr>
                <?php
                AdminController::printTests();
                ?>

            </ul>

            <!-----KRAJ------------------------ TELO -->
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