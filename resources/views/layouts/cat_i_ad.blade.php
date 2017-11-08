<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.sablon')
@section('glavni_sadrzaj')
    @parent

    <div class="col-md-10">
        <!--
        Mjesto za vaš sadržaj, stoko -->
        @yield('content')
    </div>
    <!--BANNER-->
    <div class="col-md-2 hidden-xs hidden-sm" align="center" style="padding: 0px;">
        <!-- Mjesto za banere -->
        <img class="img-responsive" style="width:100%" src="http://via.placeholder.com/200x300"/>
    </div>
    <div class="col-xs-12 hidden-md hidden-lg" style="margin-top:10px;">
        <img class="img-responsive" style="width:100%" src="http://via.placeholder.com/WWJobs"/>
    </div>
    <!--/BANNER-->
@endsection