<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Irishop') }}</title>

    <link rel="icon" href="img/core-img/logofav.png">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- Styles -->
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="top_logo">
                                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                                </div>
            </div>

            <ul id="accordion" class="accordion">
                <li>
                    <div class="link"><i class="fas fa-tachometer-alt"></i>Dashbord<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-cubes"></i>Catégories<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Toutes les Catégories</a></li>
                        <li><a href="/cat-create">Nouvelle Catégorie</a></li>
                        
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-box"></i>Produits<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-shipping-fast"></i>Livraison<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Photoshop</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-shopping-basket"></i>Commandes<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Javascript</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Ruby</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-dice"></i>Coupons<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Mobile</a></li>
                        <li><a href="#">Desktop</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-envelope"></i>Messagerie<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Bing</a></li>
                        <li><a href="#">Yahoo</a></li>
                    </ul>
                </li>
                <li>
                    <div class="link"><i class="fas fa-users"></i>Clients<i class="fa fa-chevron-down"></i></div>
                    <ul class="submenu">
                        <li><a href="#">Google</a></li>
                        <li><a href="#">Bing</a></li>
                        <li><a href="#">Yahoo</a></li>
                    </ul>
                </li>
            </ul>

        </nav>

        <!-- Page Content -->
        <div id="content">
            <div class="p-titre">
            <span style="font-size: 3em;">
  <i class="fas fa-user-secret">   Irishop </i>

</span>
               
            </div>
            @yield('content')
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });

    </script>
</body>

</html>
