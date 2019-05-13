<!DOCTYPE html>
<html>
    <head>
        @include('head')
        <title>数据迁移系统 - 管理中心</title>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/indexone" class="logo"><i class="mdi mdi-assistant"></i> 20FA.COM</a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="/indexone" class="waves-effect"><i class="mdi mdi-airplay"></i><span> 数据中心</span></a>
                            </li>
                            <li>
                                <a href="/setting" class="waves-effect"><i class="mdi mdi-swap-horizontal"></i><span> 数据转移 </span></a>
                            </li>
                            <li>
                                <a href="/logout" class="waves-effect"><i class="mdi mdi-power"></i><span> 退出登录 </span></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <!-- Top Bar End -->
                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">{{ $username }}</a></li>
                                                <li class="breadcrumb-item active">数据中心</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">数据中心</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <img src="assets/images/coins/btc.png" alt="" class="rounded-curcle">
                                            </div>
                                            <div class="col-4">
                                                <h4 class="counter text-dark m-0 pb-1"> {{ $credit }}</h4>
                                                <i class="mdi mdi-arrow-up text-success"></i> <small class="text-success">喵币</small>
                                            </div>
                                            <div class="col-12">
                                                <!-- <div id="sparkline0"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <img src="assets/images/coins/eth.png" alt="" class="rounded-curcle">
                                            </div>
                                            <div class="col-4">
                                                <h4 class="counter text-dark m-0 pb-1">{{ $post_count }}</h4>
                                                <i class="mdi mdi-arrow-up text-success"></i> <small class="text-success">文章数</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3  align-items-center">
                                    <div class="mini-stat clearfix bg-white">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <img src="assets/images/coins/dash.png" alt="" class="rounded-curcle">
                                            </div>
                                            <div class="col-4">
                                                <h4 class="counter text-dark m-0 pb-1">{{ $money }}</h4>
                                                <i class="mdi mdi-arrow-up text-success"></i> <small class="text-success">可提现 RMB</small>
                                            </div>
                                        </div>                                                                               
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <img src="assets/images/coins/lite.png" alt="" class="rounded-curcle">
                                            </div>
                                            <div class="col-4">
                                                <h4 class="counter text-dark m-0 pb-1">{{ $is_ok }}</h4>
                                                <i class="mdi mdi-arrow-up text-success"></i> <small class="text-success">账户状态</small>
                                            </div>
                                        </div>                                 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">如果您的账户状态为待迁移，请在2019.06.30日之前完成迁移</h4>
                                            <!--<script type="text/javascript" src="https://widgets.cryptocompare.com/serve/v1/coin/histo_week?fsym=BTC&amp;tsym=USD&amp;app=www.cryptocompare.com"></script>-->
                                        </div>
                                    </div>
                                </div>
                            </div><!--end row-->
                            <!-- end row -->
                            <div class="row">
                                <div class="col-md-12 col-xl-8">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">时间线</h4>
                                            <div class="main-timeline mt-3">
                                                <div class="timeline">
                                                    <span class="timeline-icon"></span>
                                                    <span class="year">May 2019</span>
                                                    <div class="timeline-content">
                                                        <h3 class="title">20FA回归</h3>
                                                        <span class="post">01 May 2019</span>
                                                        <p class="description">
                                                            回归，没什么可说的. 
                                                        </p>
                                                    </div>
                                                </div>
                                    
                                                <div class="timeline">
                                                    <span class="timeline-icon"></span>
                                                    <span class="year">Apr 2018</span>
                                                    <div class="timeline-content">
                                                        <h5 class="title">闭站</h5>
                                                        <span class="post">05 Apr 2018</span>
                                                        <p class="description">
                                                            响应国家号召，闭站清理违规资源，清理侵权资源，自查，由于某些原因猫站将不再开放，且永久关闭. 
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline">
                                                    <span class="timeline-icon"></span>
                                                    <span class="year">Jan 2018</span>
                                                    <div class="timeline-content">
                                                        <h3 class="title">地球上的猫</h3>
                                                        <span class="post">19 Jan 2018</span>
                                                        <p class="description">
                                                            成立地球上的猫论坛，使资源互换更简单，让所有人都有机会拿到想要的资源. 
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="timeline">
                                                    <span class="timeline-icon"></span>
                                                    <span class="year">Mar 2017</span>
                                                    <div class="timeline-content">
                                                        <h5 class="title">正式发布第一篇文章</h5>
                                                        <span class="post">05 Mar 2017</span>
                                                        <p class="description">
                                                            注册并上线20FA，汇集福利资源，旨在打造一个免费的福利资源网站. 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4">                                                                      
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">迁移说明</h4>                                            
                                            <a href="#" target="_blank">
                                                <div class="calculator-block" style="height:210px">                        
                                                <div class="calculator-body">                                              
                                                    <!--<script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>-->
                                                </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Map</h4>
                                            <div id="world-map-markers" style="height:220px;"></div>
                                        </div>
                                    </div>                                             
                                </div>
                            </div><!--end row-->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 20FA by 20FA.COM. 更多资料：<a href="https://www.20fa.com/" target="_blank">20FA福利资源网</a>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/modernizr.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/jquery.nicescroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="/assets/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="/assets/plugins/flot-chart/curvedLines.js"></script>
        <script src="/assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="/assets/plugins/morris/morris.min.js"></script>
        <script src="/assets/plugins/raphael/raphael-min.js"></script>
        <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        
        <script src="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>


        <script src="/assets/pages/crypto-dash.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
        <script>
             
            $(document).ready(function() {        
            $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
            $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
            });

        </script>


    </body>
</html>