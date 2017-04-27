<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- CSS -->
    <link href="css/compiled.min.css" rel="stylesheet">
    
    <style>
        .bg-skin-lp { 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
            background-attachment: fixed;
        }
    </style>
</head>

<body class="fixed-sn black-skin bg-skin-lp">
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light"> 
                </div>
            </li>
            <!--/. Logo --> 
            <!--Social-->
                        <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion"> 
                    <li><a href="#" class="waves-effect">Data Anggota</a></li>
                    <li><a href="#" class="waves-effect">Data Buku</a></li> 
                    <li><a href="#" class="waves-effect">Peminjaman</a></li>  
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Perpustakaan</p>
            </div>
            <ul class="nav navbar-nav ml-auto flex-row"> 
                <li class="nav-item">
                    <a class="nav-link" href='proses_logout.php'><i class="fa fa-sign-in"></i><span class="hidden-sm-down">Log Out</span></a>
                </li> 
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>
        <div class="container-fluid text" style="height: 800px;"> 
