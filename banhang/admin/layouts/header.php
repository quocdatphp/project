<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Trang admin</title>
      <!-- Bootstrap core CSS-->
      <link href="<?php echo base_url()?>public/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="<?php echo base_url()?>public/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="<?php echo base_url()?>public/admin/css/sb-admin.css" rel="stylesheet">
   </head>
   <body class="fixed-nav sticky-footer bg-dark" id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
         <a class="navbar-brand" href="index.php">Xin chào <?php echo $_SESSION['admin_name']?></a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
                 <div class="collapse navbar-collapse" id="navbarResponsive">
                     <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                     <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="<?php echo base_url()?>admin">
                        <i class="fa fa-fw fa-table"></i>
                        <span class="nav-link-text"></span>
                        </a>
                     </li> -->

                     <li class="<?php echo isset($open) && $open == 'category' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("category") ?>">
                     <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables"> -->
                     <i class="fa fa-fw fa-table"></i>
                     <span class="nav-link-text">Danh mục sản phẩm</span>
                     </a>
                     </li>       

                    <!--   <li class="<?php echo isset($open) && $open == 'blog' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("blog") ?>">
                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                     <i class="fa fa-fw fa-table"></i>
                     <span class="nav-link-text">Quản lí blog</span>
                     </a>
                     </li>       -->               
     
                     <li class="<?php echo isset($open) && $open == 'product' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("product") ?>">
                     <i class="fa fa-database"></i>
                     <span class="nav-link-text">Sản phẩm</span>
                     </a>
                     </li>    

                      <li class="<?php echo isset($open) && $open == 'user' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("user") ?>">
                     <i class="fa fa-user"></i>
                     <span class="nav-link-text">Thành viên</span>
                     </a>
                     </li>        

                      <li class="<?php echo isset($open) && $open == 'transaction' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("transaction") ?>">
                     <i class="fa fa-user"></i>
                     <span class="nav-link-text">Quản lí đơn hàng</span>
                     </a>
                     </li>             

                     <li class="<?php echo isset($open) && $open == 'admin' ? 'active' : ''?>">
                        <a class="nav-link" href="<?php echo modules("admin") ?>">
                     <i class="fa fa-user"></i>
                     <span class="nav-link-text">Admin</span>
                     </a>
                     </li>             
                     </li>    
            </ul>
            <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-envelope"></i>
                  <span class="d-lg-none">Messages
                  <span class="badge badge-pill badge-primary">12 New</span>
                  </span>
                  <span class="indicator text-primary d-none d-lg-block">
                  <i class="fa fa-fw fa-circle"></i>
                  </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                     <h6 class="dropdown-header">New Messages:</h6>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <strong><?php echo $_SESSION['admin_name']?></strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                     </a>                     
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item small" href="#">View all messages</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-bell"></i>
                  <span class="d-lg-none">Alerts
                  <span class="badge badge-pill badge-warning">6 New</span>
                  </span>
                  <span class="indicator text-warning d-none d-lg-block">
                  <i class="fa fa-fw fa-circle"></i>
                  </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                     <h6 class="dropdown-header">New Alerts:</h6>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <span class="text-success">
                        <strong>
                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                        </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                     </a>                     
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item small" href="#">View all alerts</a>
                  </div>
               </li>
               <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                     <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                        <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                        </button>
                        </span>
                     </div>
                  </form>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <a href="/banhang/dang-xuat.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
               </li>
            </ul>
         </div>
      </nav>
     