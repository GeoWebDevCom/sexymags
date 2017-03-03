<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elvis Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='{{asset('cpts/css/Bangers.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('cpts/css/BenchNine.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{asset('cpts/css/Cagliostro.css')}}' rel='stylesheet' type='text/css'>
    <!--fonts-->
    <!--link css-->
    <!--bootstrap-->
    <link href="{{asset('cpts/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="{{asset('cpts/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <!--default-js-->
    <script src="{{asset('cpts/js/jquery-2.1.4.min.js')}}"></script>
    <!--bootstrap-js-->
    <script src="{{asset('cpts/js/bootstrap.min.js')}}"></script>
    <!--script-->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('cpts/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('cpts/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
</head>
<body>
<div class="header-top navbar-fixed-top" id="home">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.html">Sexy Mags</a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-floats1">
                        <li><a href="{{url('/caoliu')}}" >草榴</a></li>
                        <li><a href="{{url('/uniform')}}" >制服</a></li>
                        <li><a href="{{url('/euus')}}" >欧美</a></li>
                        <li><a href="{{url('/asian')}}" >亚洲</a></li>
                        <li><a href="{{url('selfie')}}" >自拍</a></li>
                        <li><a href="{{url('/anime')}}" >动漫</a></li>
                        <li><a href="{{url('/psycho')}}" >另类</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div><!-- /.navbar-collapse -->
                <div class="clearfix"></div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
<div class="header-bottom mg-top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('cpts/images/bn1.jpg')}}" alt="First slide" class="img-wid"/>
            </div>
            <div class="item">
                <img src="{{asset('cpts/images/bn2.jpg')}}" alt="Second slide" class="img-wid"/>
            </div>
            <div class="item">
                <img src="{{asset('cpts/images/bn3.jpg')}}" alt="Third slide" class="img-wid"/>
            </div>
            <div class="item">
                <img src="{{asset('cpts/images/bn4.jpg')}}" alt="Third slide" class="img-wid"/>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    @section('content')
    @show
    <div class="footer" id="euus">
        <div class="contact-footer">
            <div class="container">

                <div class="fot-bottom">
                    <p>Copyright &copy; 2017 BjrJustin.com All rights reserved.</p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
</body>
</html>