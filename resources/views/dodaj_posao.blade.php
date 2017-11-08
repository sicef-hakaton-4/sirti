@extends('layouts.cat_i_ad')
@section('title', 'Dodavanje')

@section('content')
    <script>
        var ovestine=[];
        var test=[];
        var i=0;
        var x=0;

    function dodajPoz(){
        var kof = $('#inputKoeficijentP').val();
        var gran = $('#inputGranicaP').val();
        var kat = $('#inputKategorijap').val();

    console.log(i);
       var  kff =  $("#inputKategorijap option:selected").text();

        ovestine.push(new Array());
        ovestine[i].push(kat,gran,kof,kff)
        i++;
        tmp="";
        tmp1="";
        for(z=0;z<i;z++){
            //console.log("VR"+ovestine[z]);
        tmp=tmp+'<span class="label label-default" style="font-size: 12px;margin:2px;margin-top:4px;margin-top:4px">'+ovestine[z][3]+'<span class="badge"><i onclick="umriPoz('+z+');" class="glyphicon glyphicon-remove"></i></span></span> '
        tmp1=tmp1+ovestine[z][0]+','+ovestine[z][2]+','+ovestine[z][1]+';';
        }
        //alert(kff);
        $('#pves').html(tmp);
        $('#vestineX').val(tmp1);
        //console.log(ovestine);

    }
    function umriPoz(c){
        //alert(c);
        ovestine.splice(c, 1);
        i--;
        tmp="";
        tmp1="";
        for(z=0;z<i;z++){
            //console.log("VR"+ovestine[z]);
            tmp=tmp+'<span class="label label-default" style="font-size: 12px;margin:2px;margin-top:4px;margin-top:4px">'+ovestine[z][1]+'<span class="badge"><i onclick="umriPoz('+z+');" class="glyphicon glyphicon-remove"></i></span></span> '
            tmp1=tmp1+ovestine[z][0]+','+ovestine[z][2]+','+ovestine[z][1]+';';
        }
        //alert(kff);
        $('#pves').html(tmp);
        $('#vestineX').val(tmp1);
    }


    function dodajVes(){
             var kat = $('#inputKategorijaX').val();

            console.log(x);
            var  kff =  $("#inputKategorijaX option:selected").text();

            test.push(new Array());
            test[x].push(kat,kff)
            x++;
            tmp="";
            tmp1="";
            for(z=0;z<x;z++){
                //console.log("VR"+ovestine[z]);
                tmp=tmp+'<span class="label label-default" style="font-size: 12px;margin:2px;margin-top:4px;margin-top:4px">'+test[z][1]+'<span class="badge"><i onclick="umriVes('+z+');" class="glyphicon glyphicon-remove"></i></span></span> '
                tmp1=tmp1+test[z][0]+';';
            }
            //alert(kff);
            $('#Xves').html(tmp);
             $('#testX').val(tmp1);
            console.log(test);

        }
        function umriVes(c){
            //alert(c);
            test.splice(c, 1);
           x--;
            tmp="";
            tmp1="";
            for(z=0;z<x;z++){
                //console.log("VR"+ovestine[z]);
                tmp=tmp+'<span class="label label-default" style="font-size: 12px;margin:2px;margin-top:4px;margin-top:4px">'+test[z][1]+'<span class="badge"><i onclick="umriVes('+z+');" class="glyphicon glyphicon-remove"></i></span></span> '
                tmp1=tmp1+test[z][0]+';';
            }
            //alert(kff);
            $('#Xves').html(tmp);
            $('#testX').val(tmp1);
            console.log(test);
        }
    </script>
    <div class="panel panel-default">
        <div class="panel-heading">  Dodaj Test</div>
        <div class="panel-body">
            <div class="col-md-12">
                <form class="form-horizontal" action="<?php echo url('dodajposao');?>" method="post" class="form-control">
                    {{ csrf_field() }}


                        <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok"></i> Obavezna polja!</strong></div>

                    <div class="form-group">
                        <label for="Ime" class="col-sm-2 control-label" style="margin-top:-3px;">Naziv posla</label>
                        <div class="col-sm-10">
                            <div  id="inputIme2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <input  type="text" class="form-control" id="inputIme" name="inputIme" placeholder="Naziv posla">

                            </div> </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label" style="margin-top:-3px;">Pozicija</label>
                        <div class="col-sm-10">
                            <div id="inputObrazovanje2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <select id="inputKategorije" name="inputKategorije" class="form-control">
                                    <option value="Intership">Intership</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Medior">Medior</option>
                                    <option value="Senior">Senior</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Ime" class="col-sm-2 control-label" style="margin-top:-3px;">Istice</label>
                        <div class="col-sm-10">
                            <div  id="inputIme2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <input id="date" type="date" id="inputIstek" name="inputIstek">

                            </div> </div>
                    </div>

                    <div class="form-group">
                        <label for="Mejl" class="col-sm-2 control-label">Opis posla</label>
                        <div class="col-sm-10">
                            <div id="inputText2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <textarea class="form-control" style="resize:vertical;" rows="3" id="inputOpis" name="inputOpis" placeholder="Opis posla"></textarea>

                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="Mejl" class="col-sm-2 control-label" style="margin-top:-3px;">Vestine</label>
                        <div class="col-sm-10">
                            <button type="button" style="margin:5px;"class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal1">Dodaj vestinu</button>
                            <br>
                            <i id="pves"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Mejl" class="col-sm-2 control-label" style="margin-top:-3px;">Testovi</label>
                        <div class="col-sm-10">
                            <button type="button" style="margin:5px;"class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Dodaj Test</button>
                            <br>
                            <i id="Xves"></i>
                        </div>
                    </div>




                    <div id="posaljiRez" role="alert"></div>
                    <div id="Progres" class="progress hidden">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" id="Progres2" aria-valuemin="0" aria-valuemax="100" style="width:0%">

                        </div>
                    </div>

                    <input type="hidden" id="vestineX" name="vestineX">
                    <input type="hidden" id="testX" name="testX">




                    <hr>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                           Sacuvaj
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="myModal" style="z-index:10000" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dodaj test</h4>
                </div>
                <label  class="col-sm-12 control-label">Naziv testa:</label>
                <div class="modal-body">

                    <div class="form-group">

                        <div class="col-sm-12">
                            <div id="inputObrazovanje2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <select id="inputKategorijaX" name="inputKategorijaX" class="form-control">
                                    <?php
                                    use App\Http\Controllers\CustomerController;
                                    foreach(CustomerController::$tests as $category) {
                                        echo '<option value="' . $category->id . '"> ' . $category->naziv . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>




                </div>
                <br>
                <br>
                <div class="modal-footer">
                    <button type="button" onclick="dodajVes();" class="btn btn-primary" data-dismiss="modal">Dodaj</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                </div>
            </div>

        </div>
    </div>

    <div id="myModal1" style="z-index:10000" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Vestine</h4>
                </div>
                <label  class="col-sm-12 control-label">Kategorija:</label>
                <div class="modal-body">

                    <div class="form-group">

                        <div class="col-sm-12">
                            <div id="inputObrazovanje2" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                <select id="inputKategorijap" name="inputKategorijap" class="form-control">
                                    <?php
                                    //use App\Http\Controllers\CustomerController;
                                    foreach(CustomerController::$categories as $category) {
                                        echo '<option value="' . $category->get_id() . '"> ' . $category->get_name() . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Ime" class="col-sm-12 control-label">Koeficijent:</label>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="number" min="1" max="100" class="form-control" id="inputKoeficijentP" name="inputKoeficijentP" placeholder="60">

                                    </div> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Ime" class="col-sm-12 control-label">Granica:</label>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="number" min="1" max="100" class="form-control" id="inputGranicaP" name="inputGranicaP" placeholder="40">

                                    </div> </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" onclick="dodajPoz();" class="btn btn-primary" data-dismiss="modal">Dodaj</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                </div>
            </div>

        </div>
    </div>
@endsection