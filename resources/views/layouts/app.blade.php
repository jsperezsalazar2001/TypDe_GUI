<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title','Home Page')</title>
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/custom-styles.css') }}" rel="stylesheet" />

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('home') }}">TypDe</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome</div>
                        TypDe
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <!-- display breadcrumb -->
                    @if(!empty($data["breadlist"]))
                        <div class="container-fluid padding-top-20">
                            <ol class="breadcrumb">
                                @foreach ($data["breadlist"] as $bread)
                                    @if ($bread[3] == "1")
                                        <li class="breadcrumb-item active" aria-current="page">{{$bread[0]}}</li>
                                    @else
                                        <li class="breadcrumb-item"><a href="{{route($bread[1],$bread[2])}}">{{$bread[0]}}</a></li>
                                    @endif
                            @endforeach
                            </ol>
                        </div>
                    @endif

                    <!-- display errors -->
                    @if($errors->any())
                        <div class="container-fluid">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger alert-block margin-0">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>{{ $error }}</strong>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- display main content -->
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021</div>
                            <div>
                                <a href="#">{{ __('pagination.privacy_policy') }}</a>
                                &middot;
                                <a href="#">{{ __('pagination.terms_conditions') }}</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="{{ asset('/js/jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-3.6.0.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/js/scripts.js') }}"></script>
        <script src="{{ asset('/js/all.min.js') }}" crossorigin="anonymous"></script>
    </body>
</html>