<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('images/icons/Aha-Soft-Free-Large-Boss-Admin.ico')}}">
    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet"/>

    <!-- font icon -->
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"/>

    <link href="{{asset('css/admin_style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"/>

    {{--    <link href="{{asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

    <script src="{{asset('js/jquery-1.12.4.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>


    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/common.js') }}"></script>


    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
                    class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{route('manages.index')}}" class="logo">Nice <span class="lite">Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
            <!--  search form start -->
            <ul class="nav top-menu">
                <li>
                    <form class="navbar-form">
                        <input class="form-control" placeholder="Search" type="text">
                    </form>
                </li>
            </ul>
            <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                            </span>
                        <span class="username">{{Auth::user()->name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        @if(Auth::user()->permission == 4)
                            <li class="eborder-top">
                                <a href="{{route('users.show', Auth::user()->user_id)}}"><i class="icon_profile"></i> My
                                    Profile</a>
                            </li>
                        @endif
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon_key_alt"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="{{route('manages.index')}}">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_profile"></i>
                        <span>Users</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('users.index')}}">Staffs Table</a></li>
                        <li><a class="" href="{{route('users.customer')}}">Customers Table</a></li>
                        <li><a class="" href="{{route('users.create')}}">Create staff</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_house"></i>
                        <span>Factories</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('factories.index')}}">Factories Table</a></li>
                        <li><a class="" href="{{route('factories.create')}}">Create factory</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_archive_alt"></i>
                        <span>Products</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('products.index')}}">Products Table</a></li>
                        <li><a class="" href="{{route('products.create')}}">Create product</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Orders</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('orders.index')}}">Orders Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_comment"></i>
                        <span>Comments</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('comments.index')}}">Comments Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_pencil"></i>
                        <span>News</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('news.index')}}">News Table</a></li>
                        <li><a class="" href="{{route('news.create')}}">Create news</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="{{route('statistic.index')}}"><i class="icon_balance"></i><span>Statistics</span></a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @if(Session::has('success'))
                <div class="alert alert-success" style="margin-top:50px">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" style="margin-top:50px">
                    {{ Session::get('error') }}
                </div>
            @endif
            <br>
            @yield('content')

            @if(isset($h))
                <h2>Chào {{Auth::user()->name}}. Ngày mới tốt lành!</h2>
            @endif
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
{{--<script src="{{asset('js/jquery.js')}}"></script>--}}

<script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
{{--<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>--}}
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

<!-- custom select -->
<script src="{{asset('js/jquery.customSelect.min.js')}}"></script>
{{--<script src="assets/chart-master/Chart.js"></script>--}}

<!--custome script for all page-->
<script src="{{asset('js/scripts.js')}}"></script>
{{--<script src="js/jquery.slimscroll.min.js"></script>--}}

<script src="{{asset('js/select2.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });

    $(function () {
        $('select.styled').customSelect();
    });

    CKEDITOR.config.extraPlugins = 'justify';
</script>


</body>

</html>
