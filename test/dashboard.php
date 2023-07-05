<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">

                <!-- side and top bar include -->
                <?php include '../assets/css/sideAndTopBarMenu.html' ?>
                <!-- /side and top bar include -->

                <!-- page content -->

                <body class="nav-md">
                    <div class="container body">
                        <div class="main_container">

                            <!-- side and top bar include -->
                            <?php include '../partPage/sideAndTopBarMenu.html' ?>
                            <!-- /side and top bar include -->

                            <!-- page content -->
                            <div class="right_col" role="main">
                                <div class="">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h3>Create Employee</h3>
                                        </div>

                                        <div class="title_right">
                                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button">Go!</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Put your employee information <small>correctly</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <form class="form-horizontal form-label-left" novalidate>

                                                        <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                                        </p>
                                                        <span class="section">Employee Info</span>

                                                        <div class="item form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">First Name <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input id="firstName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="firstName" placeholder="Jon" required="required" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="item form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Last Name <span class="required">*</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="lastName" placeholder="Doe" required="required" type="text">
                                                            </div>
                                                        </div>

                                                        <!-- <div class= "container" id= "container">
<div class="card mb-4" >
                            <div class="card-header" >
                                <i class="table-dashboard"></i>
                            </div>
                            <div class="card-body" style='overflow-x:auto;' >
                    <table  id="tbl" class="table table-bordered table-hover" width="100%"  cellpadding="5" cellspacing="5">
                            <thead>
                              <tr>
                                  
                                  <th>Name</th>
                                  <th>Action</th>

                              </tr>
                            </thead>

                            <tbody>
</div> -->

                </body>
                <script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <script src="../assets/css/node_modules/mdb-ui-kit/js/mdb.min.js"></script>
                <script src="../assets/js/node_modules/jquery/dist/jquery.min.js"></script>
                <script src="../assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</html>