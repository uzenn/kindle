<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>KindleBook</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/typography.css') ?>">
   <!-- Style CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">

   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>

<body>
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html" class="header-logo">
               <img src="<?= base_url('assets/images/logo.png') ?>" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">KindleBook</span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li <?= $navActive == 'dashboard' ? 'class="active"' : ''?>>
                     <a href="<?= site_url('admin/dashboard') ?>" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
                  </li>
                  <li <?= $navActive == 'books' ? 'class="active"' : ''?>>
                     <a href="<?= site_url('admin/books') ?>" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="ri-book-2-line"></i><span>Books</span></a>
                  </li>
                  <li <?= $navActive == 'users' ? 'class="active"' : ''?>>
                     <a href="<?= site_url('admin/users') ?>" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="ri-group-line"></i><span>Users</span></a>
                  </li>
                  <li <?= $navActive == 'subscriptions' ? 'class="active"' : ''?>>
                     <a href="<?= site_url('admin/subscriptions') ?>" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i class="ri-wallet-line"></i><span>Subscriptions</span></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.html" class="header-logo">
                        <img src="<?= base_url('assets/images/logo.png') ?>" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">KindleBook</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">KindleBook</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.html">
                           <?= ucfirst($navActive) ?>
                        </li>
                     </ul>
                  </nav>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </li>
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="<?= base_url('assets/images/user/user.png') ?>" class="img-fluid rounded-circle mr-3" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello, <?= $this->session->userdata('username')? strtok($this->session->userdata('username'), " ") : "Guest" ?></h5>
                                    <span class="text-white font-size-12"><?= strtoupper($this->session->userdata('status')) ?></span>
                                 </div>
                                 <?php if ($this->session->userdata('admin_logged')) { ?>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="<?= site_url('sign-out') ?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 <?php } else { ?>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="<?= site_url('sign-in') ?>" role="button">Sign in<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->