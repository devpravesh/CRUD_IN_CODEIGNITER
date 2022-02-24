<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="5Xl8c2VMRKAMnqS3KIlqu1UpioYDXonjTy1aq56p" />
    <title>InkCasa Admin Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/dist/css/AdminLTE.min.css?ver=1.0.0.0">
    <link rel="stylesheet" href="https://stage.inkcasa.com/dist/css/skins/_all-skins.css?ver=1.0.0.0">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://stage.inkcasa.com/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body class="hold-transition skin-black-light sidebar-mini">


    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <img src="https://www.inkcasa.com/Content/images/logow.png" alt="" width="120" height="40">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->


                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="https://stage.inkcasa.com/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <li>
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                </li>
                            </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://www.kindpng.com/picc/m/699-6997452_administrator-network-icons-system-avatar-computer-transparent-admin.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p style="font-weight: bold; font-size: medium;">Admin</p>
                        <a href="#">Pravesh</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="/" >
                            <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                             <span style="padding-left: 2%; padding-bottom: 10%;">Dashboard</span>

                        </a>

                    </li>

                    <li>
                        <a href="leads" id="leads">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> <span style=" padding-left: 2%;">Leads</span>

                        </a>

                    </li>

                    <li>
                        <a href="enq">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-question-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg></i> <span style="padding-left: 2%;">Enquiries</span>
                        </a>

                    </li>
                    <li>
                        <a href="masterlead">
                        <ion-icon size="small" name="speedometer-outline"></ion-icon>
                            <span style="padding-left: 2%;">Master Lead Page</span>
                        </a>

                    </li>
                    </ul>
            </section>
        </aside>


