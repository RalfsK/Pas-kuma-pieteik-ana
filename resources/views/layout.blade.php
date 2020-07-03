<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS files -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/reset.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/libs/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/style.css">
    <!-- SCRITP files -->
    <script src="{{ url('/') }}/libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="{{ url('/') }}/libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- SMART MENU files https://www.smartmenus.org/download/-->
    <script type="text/javascript" src="{{ url('/') }}/libs/bootstrap/js/jquery.smartmenus.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/libs/bootstrap/js/jquery.smartmenus.bootstrap.js"></script>


    <script src="{{ url('/') }}/js/rvtis.js"></script>

    @yield('script')

</head>
<body>
<section class="container-fluid">
    <section class="row">
        <header class="col-md-12">
            <div class="headerInline"><img src="{{ url('/') }}/images/rvt-logo.svg" id="logo"/></div>
            <div class="headerInline"><span id="title">PIKC RVT pasākuma pieteikšana </span></div>
        </header>
    </section>
    <section class="row">
        <nav class="navbar navbar-inverse col-md-12">
            <div class="navbar-header">
                {{--<a class="navbar-brand" href="#"><img src="{{ url('/') }}/images/rvt-logo.svg" id="logo"/></a>--}}
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">APA<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/apa') }}">APA pamata dati</a></li>
                            <li><a href="{{ url('/apa_atskaite') }}">APA atskaites tabula</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistēmas dati<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/darbinieki') }}">PIKC RVT darbinieki</a></li>
                            <li><a href="{{ url('/grupas') }}">PIKC RVT grupas</a></li>
                            <li><a href="{{ url('/prieksmeti') }}">PIKC RVT priekšmeti</a></li>
                            <li><a href="{{ url('/menesi') }}">APA mēneši</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Komisijas sastāvs<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Komisijas vadītāji <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    {{--<li><a href="{{ url('/') }}">Pievienot komisijas vadītāju</a></li>--}}
                                    <li><a href="{{ url('/komisijas_vaditaji') }}">MK vadītāji</a></li>
                                    <li><a href="{{ url('/komisijas_veidi') }}">MK komisiju veidi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Komisijas priekšmeti <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('/komisijas') }}">Apskatīt komisiju priekšmetus</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href=""><b>Normunds Pauders [Iziet]</b></a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="row">
        <aside class="col-md-2">
            @yield('asideLeft')
        </aside>
        <main class="col-md-8">
            @yield('content')
        </main>
        <aside class="col-md-2">
            @yield('asideRight')
        </aside>
    </section>
</section>
@yield('modal')
</body>
</html>
