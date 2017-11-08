@extends('layouts.sablon')
@section('title', 'Pocetna')
@section('glavni_sadrzaj')


    <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm">
        </div>
        <div class="col-md-4 search-box">
            <input type="search" id="search" name="search" value="" placeholder="Pretraga..." />


            <div id="rezultati" class="results">

            </div>
        </div>



</div>
        <script>
            var MIN_LENGTH = 2;
            $("#rezultati").hide();
            $(document).ready(function(){
                $("#search").keyup(function(){
                    var str=  $("#search").val();
                    if(str.length >= MIN_LENGTH) {
                        $.get( "{{ url('api/livesearch?term=') }}"+str, function( data ) {
                            $( "#rezultati" ).html( data );
                        });
                        $("#rezultati").fadeIn(400);
                    }else {
                        $( "#rezultati" ).html("<b>Pretraga...</b>");
                        if(str.length == 0)  $("#rezultati").fadeOut(400);
                    }
                });
                $("#search").keypress(function (e) {
                    if (e.which == 13) {
                        var str=  $("#search").val();
                        if(str.length >= MIN_LENGTH) {
                            $(location).attr('href', 'pretraga/'+str)
                        }
                        return false;    //<---- Add this line
                    }
                });
            });


        </script>
@endsection
@section('bottom_sadrzaj')
            <div class="col-md-12 " >

                <img class="img-responsive"  src="http://via.placeholder.com/1000x150" style="width:60%; margin:auto; "/>

            </div>
    @endsection
