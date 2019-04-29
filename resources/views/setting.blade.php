<!DOCTYPE html>
<html>
    <head>
        @include('head')
        <title>数据迁移 - 管理中心</title>
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
                        <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> 20FA.COM</a>
                        <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="index.html" class="waves-effect"><i class="mdi mdi-airplay"></i><span> 数据中心</span></a>
                            </li>
                            <li>
                                <a href="setting.html" class="waves-effect"><i class="mdi mdi-swap-horizontal"></i><span> 数据迁移 </span></a>
                            </li>                            
                            <li>
                                <a href="logout.html" class="waves-effect"><i class="mdi mdi-power"></i><span> 退出登录 </span></a>
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
                                                <li class="breadcrumb-item active">数据迁移</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">数据迁移</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-4 col-xl-2">
                                    <div class="card m-b-30">
                                        <div class="card-body">                                           
                                            <div class=" text-center">                        
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-thumbnail w-50">
                                                <h4 class="font-16">{{ $username }}</h4>
                                                <a href="" class="text-muted font-14">{{ $email }}</a>
                                                <ul class="list-unstyled list-inline mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="#"><i class="ti-facebook text-primary"></i></a></li>                                                    
                                                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin text-danger"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt text-info"></i></a></li>
                                                </ul>
                                                <a href="" class="btn btn-primary btn-sm mt-3">开始迁移</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-xl-5">
                                    <div class="card bg-white m-b-30">
                                        <div class="card-body">
                                            <div class="general-label">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">用户名 (无法更改)</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Full Name">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">邮箱 (无法更改)</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">密码</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">确认修改</button>
                                                </form>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-5">
                                    <div class="card bg-white m-b-30">
                                        <div class="card-body">
                                            <div class="general-label">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">是否保留文章</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>否</option>
                                                            <option>是</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">是否要求删除账户</label>
                                                        <select class="form-control" id="exampleFormControlSelect2">
                                                            <option>否</option>
                                                            <option>是 (慎重)</option>
                                                        </select>
                                                    </div>                                                
                                                    <button type="submit" class="btn btn-primary">确认修改</button>
                                                </form>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">迁移账户前您可以选择更改您的账户内容，用户名相同时会在您的用户名后面附加随机字符串，账户迁移后将无法更改</h4>
                                            <!--<script type="text/javascript" src="https://widgets.cryptocompare.com/serve/v1/coin/histo_week?fsym=BTC&amp;tsym=USD&amp;app=www.cryptocompare.com"></script>-->
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

        <!-- App js -->
        <script src="/assets/js/app.js"></script>

    </body>
</html>