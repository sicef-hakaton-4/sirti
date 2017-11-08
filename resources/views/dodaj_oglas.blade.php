@extends('layouts.cat_i_ad')
@section('title', 'Dodavanje')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">  Dodaj oglas</div>
        <div class="panel-body">
            <div class="col-md-12">
                <form class="form-horizontal" action="<?php echo url('dodaj');?>" method="post" class="form-control">
                    {{ csrf_field() }}


                        <div class="well well-sm"><strong><i class="glyphicon glyphicon-ok"></i> Obavezna polja!</strong></div>

                        <div class="form-group">
                            <label for="Ime" class="col-sm-2 control-label">Naziv testa:</label>
                            <div class="col-sm-10">
                                <div  id="inputIme2" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                    <input  type="text" class="form-control" id="inputIme" name="inputIme" placeholder="Test iz PHP-a">

                                </div> </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Kategorija:</label>
                            <div class="col-sm-10">
                                <div id="inputObrazovanje2" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                    <select id="inputKategorija" name="inputKategorija" class="form-control">
                                        <?php
                                        use App\Http\Controllers\CustomerController;
                                        foreach(CustomerController::$categories as $category) {
                                            echo '<option value="' . $category->category_id . '"> ' . $category->name . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Ime" class="col-sm-2 control-label">Trajanje testa:</label>
                            <div class="col-sm-10">
                                <div  id="inputIme2" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                    <input  type="number" class="form-control" id="inputTrajanje" name="inputTrajanje" placeholder="Trajanje testa u SEKUNDAMA">

                                </div> </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <label for="Ime" class="col-sm-2 control-label">Pitanje 1:</label>
                                <div class="col-sm-10">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputPitanje1" name="inputPitanje1" placeholder="Tekst pitanja">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 1:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor11" name="inputOdgovor11" placeholder="Tacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 2:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor21" name="inputOdgovor21" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 3:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor31" name="inputOdgovor31" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 4:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor41" name="inputOdgovor41" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <label for="Ime" class="col-sm-2 control-label">Pitanje 2:</label>
                                <div class="col-sm-10">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputPitanje2" name="inputPitanje2" placeholder="Tekst pitanja">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 1:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor12" name="inputOdgovor12" placeholder="Tacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 2:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor22" name="inputOdgovor22" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 3:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor32" name="inputOdgovor32" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 4:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor42" name="inputOdgovor42" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <hr> <div class="row">
                                <label for="Ime" class="col-sm-2 control-label">Pitanje 3:</label>
                                <div class="col-sm-10">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputPitanje3" name="inputPitanje3" placeholder="Tekst pitanja">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 1:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor13" name="inputOdgovor13" placeholder="Tacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 2:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor23" name="inputOdgovor23" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 3:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor33" name="inputOdgovor33" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 4:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor43" name="inputOdgovor43" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <hr> <div class="row">
                                <label for="Ime" class="col-sm-2 control-label">Pitanje 4:</label>
                                <div class="col-sm-10">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputPitanje4" name="inputPitanje4" placeholder="Tekst pitanja">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 1:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor14" name="inputOdgovor14" placeholder="Tacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 2:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor24" name="inputOdgovor24" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 3:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor34" name="inputOdgovor34" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="Ime" class="col-sm-4 control-label">Odgovor 4:</label>
                                <div class="col-sm-8">
                                    <div  id="inputIme2" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                                        <input  type="text" class="form-control" id="inputOdgovor44" name="inputOdgovor44" placeholder="Netacan odgovor">

                                    </div>
                                </div>
                            </div>
                            <hr>
                                               </div>






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
@endsection