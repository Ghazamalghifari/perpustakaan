<html>
<head>
    <title>Login</title> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <style type="text/css">
    body {
        padding-top: 3cm; 
        background-image: url("image/wallpaper-login.jpg");
    } 
    .card {     
        width: 55%; 
    } 
    </style>
    </head>

    <body>
        <div class='container'> 
            <div class='row'>
                <div class='col-sm-3'></div>
                <!--Form with header-->
                <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="form-header blue-gradient">
                            <h3><i class="fa fa-user"></i> Login:</h3>
                        </div>

                        <form action="proses_login.php" method="post"> 

                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="form3" class="form-control" name='username'>
                            <label for="form3">Your name</label>
                        </div> 

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" class="form-control" name='password'>
                            <label for="form4">Your password</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-indigo">Login</button> 
                        </div>
                        </form>

                    </div>
                </div>
                <!--/Form with header--> 
            </div>
        </div> 


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>