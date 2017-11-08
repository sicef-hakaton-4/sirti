
<html>
<head>
    <title>@yield('title') | SIRTI</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="body">
<div class="omotac">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><strong>WWJ</strong></a>             <!--TODO: index.php?-->

        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav">

                <li class=" "><a href="{{ route('onama') }}">Kod drugih!</a></li>
                <li class=" "><a href="{{ route('home') }}">Pretraga</a></li>
            </ul>
            @section('login')
            @show

            <ul class="nav navbar-nav navbar-right" style="margin-right:1%;">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">  <span class="glyphicon glyphicon-log-in"></span> &nbsp;Prijavi se</a></li>
                    <li><a href="{{ route('register') }}"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Registruj se</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span> &nbsp; {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp; Odjavi se
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                                <a href="{{ route('profil') }}">
                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp; Moj profil
                                </a>

                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- NAVBAR END -->
    <div class="row">
                     <!--da se centrira sav sadrzaj-->
        <div class=" col-md-12" style="margin-top:80px">
            @yield('glavni_sadrzaj')
        </div>

    </div>
    <div class="row">
        <div class=" col-md-12" style="margin-top:80px">
            @yield('bottom_sadrzaj')
        </div>

    </div>
</div>

<!--FOOTER-->
<footer class="footer">
    <hr class="footer-hr">
    <div class="container" align="center">
        <div class="psi-footer"><p>SICEF HACKATHON 2017 - <a href="{{ route('onama') }}">TIM SIRTI</a></p></div>
    </div>
</footer>

</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/59fe6624bb0c3f433d4c72db/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->