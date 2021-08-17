<?php 
    session_start();
    require('Connections/db_class.php');
    $obj = new Db_Class();
?>

<?php
if(isset($_POST['logoutbtn'])){
   session_destroy();
     echo '<script type="text/javascript">'; 
    echo 'window.location.href = "login.php";';
    echo '</script>';
}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Styles/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Styles/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="Styles/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Styles/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="Styles/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

   <style>

[class*=sidebar-dark-] {
    background-color: #017298;
}
  </style>
</head>


<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block" style="text-align:center">
        <a href="#" class="nav-link">Home</a>
      </li>
     <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

<form method="post">
    <li class="nav-item">
        <input type="submit" class="btn btn-sm bg-gradient-danger" role="button" name="logoutbtn" value="logout">          
        </input>
      </li>
</form>
      
      <!--<li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="Styles/dist/img/sa.png" alt="NIC" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NIC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

       
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon "></i>
              <h4>
                   <?php echo "Welcome -- " . $_SESSION["userl"] . ""; ?>
              </h4>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Employee Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
			
			  
            <ul class="nav nav-treeview">
			 <li class="nav-item">
                <a href="PermanentDetails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permanent Details</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="Fixation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="CurrentDetails.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Current Details</p>
                </a>
              </li>
            
            
              
            </ul>
          </li>
  
            <li class="nav-item">
            <a href="officeData.php" class="nav-link">
              <i class="nav-icon "></i>
              <p>Office Data</p>
            </a>
          </li>


       <!--   <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>-->
  
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
     
            <h1 style="text-align: center;background-color: #017298;color:white">Employee Master</h1>
         
      </div>
    </section>
	
	<section class="content">
	<div class="container-fluid">