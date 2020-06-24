<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Dashboard Branchlink.in | {{auth()->user()->name}}</title>
   <link rel="icon" href="images/icon.png">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- favicon
		============================================ -->
   <!-- Google Fonts
		============================================ -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
   <!-- Bootstrap CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
   <!-- Bootstrap CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/font-awesome.min.css">
   <!-- owl.carousel CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/owl.carousel.css">
   <link rel="stylesheet" href="dashboard/css/owl.theme.css">
   <link rel="stylesheet" href="dashboard/css/owl.transitions.css">
   <!-- meanmenu CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/meanmenu/meanmenu.min.css">
   <!-- animate CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/animate.css">
   <!-- normalize CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/normalize.css">
   <!-- mCustomScrollbar CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css">
   <!-- jvectormap CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/jvectormap/jquery-jvectormap-2.0.3.css">
   <!-- notika icon CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/notika-custom-icon.css">
   <!-- wave CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/wave/waves.min.css">
   <!-- main CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/main.css">
   <!-- style CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/style.css">
   <link rel="stylesheet" href="css/custom.css">
   <!-- responsive CSS
		============================================ -->
   <link rel="stylesheet" href="dashboard/css/responsive.css">
   <!-- modernizr JS
		============================================ -->
   <script src="dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
   <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"
      type="96955bc328fcaeae7f75a015-text/javascript"></script>
</head>

<body>
   <div class="header-top-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="logo-area">
                  <a href="/administrator"><img class="logodash" src="/auth/images/logo-light-white.png"
                        alt="Branchlink Logo" /></a>
               </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
               <div class="header-top-menu">
                  <ul class="nav navbar-nav notika-top-nav">
                     <li class="nav-item">
                        <a data-placement="bottom" data-toggle="tooltip" title="Logout"
                           href="/logout/{{auth()->user()->id}}"><span><i
                                 class="notika-icon notika-close"></i></span></a>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- End Header Top Area -->
   <!-- Mobile Menu start -->
   <div class="mobile-menu-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
               <div class="mobile-menu">
                  <nav id="dropdown">
                     <ul class="mobile-menu-nav">
                        <li><a href="/link">Link</a>
                        </li>
                        <li><a href="/appearance">Appearance</a></li>
                        {{-- <li><a href="/settings">Settings</a></li> --}}
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Mobile Menu end -->
   <!-- Main Menu area start-->
   <div class="main-menu-area mg-tb-40">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
               <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                  <li class="@yield('activelink')"><a href="/link">Link</a></li>
                  <li class="@yield('activethemes')"><a href="/appearance">Appearance</a></li>
                  {{-- <li class="@yield('activesettings')"><a href="/settings">Settings</a></li> --}}
               </ul>
            </div>

         </div>
      </div>
   </div>
   @yield('content')
   <!-- Start Footer area-->
   <div class="footer-copyright-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="footer-copy-right">
                  <?php $year = Date('Y'); ?>
                  <p>Copyright © {{$year}}
                     . All rights reserved. Branchlink from Sarjanamalam</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script type="text/javascript">
      function updatesubmit() {
         document.getElementById("formupdate").submit();
      }
   </script>
   <script type="text/javascript">
      function form_submit() {
         document.getElementById("formaction").submit();
      }
   </script>
   <!-- End Footer area-->
   <!-- jquery
		============================================ -->
   <script src="dashboard/js/vendor/jquery-1.12.4.min.js"></script>
   <!-- bootstrap JS
		============================================ -->
   <script src="dashboard/js/bootstrap.min.js"></script>
   <!-- wow JS
		============================================ -->
   <script src="dashboard/js/wow.min.js"></script>
   <!-- price-slider JS
		============================================ -->
   <script src="dashboard/js/jquery-price-slider.js"></script>
   <!-- owl.carousel JS
		============================================ -->
   <script src="dashboard/js/owl.carousel.min.js"></script>
   <!-- scrollUp JS
		============================================ -->
   <script src="dashboard/js/jquery.scrollUp.min.js"></script>
   <!-- meanmenu JS
		============================================ -->
   <script src="dashboard/js/meanmenu/jquery.meanmenu.js"></script>
   <!-- counterup JS
		============================================ -->
   <script src="dashboard/js/counterup/jquery.counterup.min.js"></script>
   <script src="dashboard/js/counterup/waypoints.min.js"></script>
   <script src="dashboard/js/counterup/counterup-active.js"></script>
   <!-- mCustomScrollbar JS
		============================================ -->
   <script src="dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
   <!-- jvectormap JS
		============================================ -->
   <script src="dashboard/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
   <script src="dashboard/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
   <script src="dashboard/js/jvectormap/jvectormap-active.js"></script>
   <!-- sparkline JS
		============================================ -->
   <script src="dashboard/js/sparkline/jquery.sparkline.min.js"></script>
   <script src="dashboard/js/sparkline/sparkline-active.js"></script>
   <!-- sparkline JS
		============================================ -->
   <script src="dashboard/js/flot/jquery.flot.js"></script>
   <script src="dashboard/js/flot/jquery.flot.resize.js"></script>
   <script src="dashboard/js/flot/curvedLines.js"></script>
   <script src="dashboard/js/flot/flot-active.js"></script>
   <!-- knob JS
		============================================ -->
   <script src="dashboard/js/knob/jquery.knob.js"></script>
   <script src="dashboard/js/knob/jquery.appear.js"></script>
   <script src="dashboard/js/knob/knob-active.js"></script>
   <!--  wave JS
		============================================ -->
   <script src="dashboard/js/wave/waves.min.js"></script>
   <script src="dashboard/js/wave/wave-active.js"></script>
   <!--  todo JS
		============================================ -->
   <script src="dashboard/js/todo/jquery.todo.js"></script>
   <!-- plugins JS
		============================================ -->
   <script src="dashboard/js/plugins.js"></script>
   <!--  Chat JS
		============================================ -->
   <script src="dashboard/js/chat/moment.min.js"></script>
   <script src="dashboard/js/chat/jquery.chat.js"></script>
   <!-- main JS
		============================================ -->
   <script src="dashboard/js/main.js"></script>
   <script>
      $(function () {
         $('[data-toggle="tooltip"]').tooltip()
      })
   </script>
   <script>
      function copyFunction() {
         var CopyText = document.getElementById('accountbranchlink');
         /* Select the text field */
         CopyText.select();
         /* Copy the text inside the text field */
         document.execCommand("copy");

         /* Alert the copied text */
         alert("URL Kamu berhasil dicopy: " + CopyText.value);
      }
   </script>
</body>

</html>