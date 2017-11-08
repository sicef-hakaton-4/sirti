@extends('layouts.sablon')

@section('glavni_sadrzaj')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Greska!</div>
                    <div class="panel-body">
                        <?php
                        if(isset($error)){
                            echo $error;
                        }else{
                        echo 'Stranica nije pronadjena!';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
