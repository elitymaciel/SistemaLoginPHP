<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= SITE["titulo"]?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/menu_cursos.css">

    <link rel="stylesheet" href="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link href="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/smartwizard/css/smart_wizard.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= SITE['base_url']?>" class="navbar-brand">
                    <!-- <img src="<?= SITE['base_url']?>assets/dist/img/pceplogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8"> -->
                    <span class="brand-text font-weight-light"><b>Sistema de Login</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="<?= SITE['base_url']?>" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">Cadastro</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= SITE["base_url"] ?>usuario" class="dropdown-item">Usuarios</a></li>
                                <li><a href="<?= SITE["base_url"] ?>usuario/grupo" class="dropdown-item">Grupo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= SITE['base_url']?>" class="nav-link">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= SITE['base_url']?>" class="nav-link">Configurações</a>
                        </li>
                    </ul>
 
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/dist/img/user8-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/dist/img/user3-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i
                                                    class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE["base_url"]?>sair"><i
                                class="fas fa-times-circle"></i> <b>Sair</b></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <div class="content-wrapper">
            <?=$v->section('content')?>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <?php
            if($_SESSION['logado']):
            ?>
            <div class="float-right d-none d-sm-inline">
             Usuário: <b><?= ucfirst($_SESSION['nome'])?></b>
            </div>
            <?php
                endif
            ?>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2019-<?= date("Y")?> <a href="http://www.seosistema.com.br">Maciel Oliveira </a> </strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= SITE["base_url"]?>vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="<?= SITE["base_url"] ?>vendor/almasaeed2010/adminlte/smartwizard/js/jquery.smartWizard.min.js"></script>
    <script src="<?= SITE['base_url']?>vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= SITE['base_url']?>vendor/almasaeed2010/adminlte/recursosextras.js"></script>
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
});
</script>
    <?php 
        if (!empty($_SESSION['alert'])) {
            unset($_SESSION['alert']);
        }
    ?>
<script>
  
</script>
</body>

</html>