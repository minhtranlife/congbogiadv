<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$pageTitle}}</title>
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/custom.css')}}" rel="stylesheet">
    @yield('custom-style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- jQuery -->
    <script src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });

            $('#back-to-top').tooltip('show');

        });
    </script>

    @yield('custom-script')
    <!--[endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('')}}">Công bố giá dịch vụ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="mainnav">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ lưu trú
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('dich-vu-luu-tru/ks-3-sao')}}">Danh sách cơ sở kinh doanh cung cấp dịch vụ lưu trú</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ vận tải
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('dich-vu-van-tai-xe-khach')}}">Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe khách</a>
                        </li>
                        <li>
                            <a href="{{url('dich-vu-van-tai-xe-buyt')}}">Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe buýt</a>
                        </li>
                        <li>
                            <a href="{{url('dich-vu-van-tai-xe-taxi')}}">Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe taxi</a>
                        </li>
                        <li>
                            <a href="{{url('dich-vu-van-tai-cho-hang')}}">Danh sách doanh nghiệp cung cấp dịch vụ vận tải chở hàng</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--div class="pull-right">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div-->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    @yield('content')
    <a id="back-to-top" style="cursor: pointer;
                                    position: fixed;
                                    bottom: 20px;
                                    right: 20px;
                                    display:none;"
       href="#" class="btn btn-primary" role="button"
       title="Quay lại đầu trang" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-menu-up"></span>
    </a>
    <!-- /.row -->
    <hr>


    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>2016 © LifeSoft - Tiện ích hơn - Hiệu quả hơn</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->


</body>

</html>
