<!DOCTYPE html>
<html lang="en">
<head><title>{{$pageTitle}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet"
          href="{{url('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/bootstrap/css/bootstrap.min.css')}}">
    <!--LOADING STYLESHEET FOR PAGE--><!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{url('vendors/animate.css/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/jquery-pace/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/iCheck/skins/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/jquery-notific8/jquery.notific8.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('vendors/bootstrap-daterangepicker/daterangepicker-bs3.css')}}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{url('css/themes/style1/orange-blue.css')}}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{url('css/themes/style1/orange-blue.css')}}" id="theme-change"
          class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{url('css/style-responsive.css')}}">
</head>
<body class="horizontal-menu-page clear-cookie ">
<div>

    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{url()}}" class="navbar-brand"><span class="fa fa-rocket"></span><span
                            class="logo-text">LifeSoft</span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav horizontal-menu hidden-sm hidden-xs  ">
                    <li class="active"><a href="{{url()}}">Trang chủ</a></li>
                    <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Dịch vụ lưu trú
                            &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('dvlt')}}">Khách san- nhà nghỉ</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Dịch vụ vận tải
                            &nbsp;<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url()}}">Danh sách công ty </a></li>
                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <!--END THEME SETTING-->
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->

        <!--END MODAL CONFIG PORTLET--></div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <div class="clearfix"></div>
                    <li><a href="{{url()}}"><i class="fa fa-tachometer fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Trang chủ</span></a>
                    </li>
                    <li><a href="#"><i class="fa fa-laptop fa-fw">
                                <div class="icon-bg bg-pink"></div>
                            </i><span class="menu-title">Dịch vụ lưu trú</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('dvlt')}}"><i class="fa fa-rocket"></i><span
                                            class="submenu-title">Khách sạn- nhà nghỉ</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-laptop fa-fw">
                                <div class="icon-bg bg-pink"></div>
                            </i><span class="menu-title">Dịch vụ vận tải</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url()}}"><i class="fa fa-rocket"></i><span
                                            class="submenu-title">Danh sách khách sạn- nhà nghỉ</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->

        <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">{{$pageTitle}}</div>
                </div>
                <ol class="breadcrumb page-breadcrumb">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="{{url()}}">Trang chủ</a>&nbsp;&nbsp;<i
                                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>

                    <li class="active">{{$pageTitle}}</li>
                </ol>
                <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
                            class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden"
                                                                                                       name="endstart"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            @yield('content')
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">2016 © LifeSoft - Tiện ích hơn - Hiệu quả hơn</div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER--></div>
</div>
<script src="{{url('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{url('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{url('js/jquery-ui.js')}}"></script>
<!--loading bootstrap js-->
<script src="{{url('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{url('js/html5shiv.js')}}"></script>
<script src="{{url('js/respond.min.js')}}"></script>
<script src="{{url('vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{url('vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="{{url('vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{url('vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{url('vendors/iCheck/custom.min.js')}}"></script>
<script src="{{url('vendors/jquery-notific8/jquery.notific8.min.js')}}"></script>
<script src="{{url('vendors/jquery-highcharts/highcharts.js')}}"></script>
<script src="{{url('js/jquery.menu.js')}}"></script>
<script src="{{url('vendors/jquery-pace/pace.min.js')}}"></script>
<script src="{{url('vendors/holder/holder.js')}}"></script>
<script src="{{url('vendors/responsive-tabs/responsive-tabs.js')}}"></script>
<script src="{{url('vendors/jquery-news-ticker/jquery.newsTicker.min.js')}}"></script>
<script src="{{url('vendors/moment/moment.js')}}"></script>
<script src="{{url('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!--CORE JAVASCRIPT-->
<script src="{{url('js/main.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script type="text/javascript">(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145464-14', 'auto');
    ga('send', 'pageview');


</script>
</body>
</html>