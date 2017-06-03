<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="img/favicon_1.ico">

    <title>Velonic - Responsive Admin Dashboard Template</title>

    <!--引入css样式-->
    @include('admin.public.style')


</head>


<body>



<!-- Aside Start-->
<!--引入侧边栏-->
@include('admin.public.aside')
<!-- Aside Ends-->


<!--Main Content Start -->
<section class="content">

    <!-- Header -->
    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>



        <!-- Left navbar -->
        <nav class=" navbar-default" role="navigation">

            <!-- Right navbar -->
            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                <!-- mesages -->

                <!-- /messages -->
                <!-- Notification -->

                <!-- /Notification -->

                <!-- user login dropdown start-->
                <li class="dropdown text-center">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="picture/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                        <span class="username">退出 </span> <span class="caret"></span>
                    </a>

                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- End right navbar -->
        </nav>

    </header>
    <!-- Header Ends -->


    <!-- Page Content Start -->
    <!-- ================== -->

    <div class="wraper container-fluid">

        @yield('content')


    </div>
    <!-- Page Content Ends -->
    <!-- ================== -->

    <!-- Footer Start -->
    <footer class="footer">
        2016 © Velonic.
    </footer>
    <!-- Footer Ends -->



</section>
<!-- Main Content Ends -->



@include('admin.public.script')

@yield('js')
</body>
</html>