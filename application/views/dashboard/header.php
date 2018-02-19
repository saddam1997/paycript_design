    <!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Paycrypt Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/css/vendor.css">
        <link rel="stylesheet" href="<?php echo base_url();?>vendor/css/set1.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo base_url();?>vendor/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="<?php echo base_url();?>vendor/css/app.css">');
            }
        </script>
       
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                  <div class="header-block header-block-collapse d-lg-none d-xl-none">
                      <button class="collapse-btn" id="sidebar-collapse-btn">
                          <i class="fa fa-bars"></i>
                      </button>
                  </div>
                    <div class="header-block header-block-search">

                    </div>

                    <div class="header-block header-block-nav">
                      <ul>
                          <li>
                              <a href="#">Admin Name</a>
                          </li>
                          <li>
                              <a href="#">Logout <i class="fa fa-sign-out"></i></a>


                          </li>
                      </ul>

                    </div>



                </header>
                <aside class="sidebar">
                  <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <img src="<?php echo base_url();?>vendor/assets/img/paycrypt-Logo.png">
                                <hr ></hr>
                            </div>
                        </div>