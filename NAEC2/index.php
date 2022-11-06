<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="Untitled2.css" rel="stylesheet" type="text/css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>		</head>
	</head>
  <body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
        <div class="c-header-icon js-hamburger">
          <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
        </div>
        <div class="c-header-icon has-dropdown">
          <div class="c-dropdown c-dropdown--notifications">
            <div class="c-dropdown__header"></div>
            <div class="c-dropdown__content"></div>
          </div>
        </div>
       
        <div class="header-icons-group">
       
          <div class="c-header-icon logout"><a href="index.php?logout='1'"><i class="fa fa-power-off"></i></a></div>
        </div>
      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt"><img src="unnamed.png" style="width: 50px;"></div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
              <div class="c-menu__item__inner"><i class="fa fa-book"></i>
                <div class="c-menu-item__title"><span>Dashboard</span></div>
              </div>
            </li>
           
          
          </ul>
        </nav>
      </div>
    </div>
  </body>
  <main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg">
      <h1 class="page-title" style="color:white;">Dashboard</h1>
      <div class="page-content">Welcome, <strong style="text-transform: uppercase; "><?php echo $_SESSION['username']; ?></strong></div>
      <br><br>
      <div class="page-content"><h4>The centre for nuclear energy studies (CNES) was established in 2009 by the Federal Government of Nigeria, and got approval in 2010 to run as a centre of excellence in nuclear energy research and training under the auspices of the Nigeria atomic energy commission (NAEC). The centre is domiciled at University of Port Harcourt, south- south</h4><br><br><br>
    
      <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                
              </div>
              <div class="down-content">
                <h4>Duration Of Programmes And Schedule</h4>
                <p>The programme is modular and shall last for 16 weeks. It comprises 10 taught courses, industrial visits and an Individual Term paper. Each course shall be for duration of 12 hours of lectures and 2 hours of examination.
                </p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
              
              </div>
              <div class="down-content">
                <h4>Method Of Application</h4>
                <p>(a) Pay a non-refundable application fee of N15,000 (Fifteen Thousand nairs only) Into CNES Eco Bank A/C No. 0522003580.<br>

                  (b) To fill the Application Form, send an mail to <a  href="mailto:cnes@uniport.edu.ng">cnes@uniport.edu.ng</a> a proof of payment
                  
                  For enquiries, please call 08035462713 or 08180062100</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                
              </div>
              <div class="down-content">
                <h4>Our Vision</h4>
                <p>The centre shall through teaching and research become a leading nuclear
                  technology centre of excellence in the country and indeed the world by
                  attracting best brains in both staff and students through effective collaborations,
                  and providing practicable solutions to the peaceful utilization of nuclear energy.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                
              </div>
              <div class="down-content">
                <h4>Admission Requirements</h4>
                <p>Candidates must possess a Bachelor's Degree with minimum of Third Class Hours for HND Equivalent in Engineering, Sciences or Medical Sciences from a recognised University (or Polytechnic) Candidates with signicant working experience in a related field may be considered for admission. Qualified foreign students are eligible for mission. The Course would be offered in English Language<br><br>
                          Intending candidates are also advised to undertake free pre-admission online modules of the Texas A&M University (TAMU) (1) Bask nuclear and atomic physics, fi, Nuclear fuel cycle and il Bac radiation detection. These modules are accessible through the link: http://www.nsspi.tamu.edu/nssep/courses/module/. A good score in each the modules will be an added advantage</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

    </div>
    </div>
  </main>
  <!-- partial -->
   
  <script>
      let Dashboard = (() => {
  let global = {
    tooltipOptions: {
      placement: "right" },

    menuClass: ".c-menu" };


  let menuChangeActive = el => {
    let hasSubmenu = $(el).hasClass("has-submenu");
    $(global.menuClass + " .is-active").removeClass("is-active");
    $(el).addClass("is-active");

    // if (hasSubmenu) {
    // 	$(el).find("ul").slideDown();
    // }
  };

  let sidebarChangeWidth = () => {
    let $menuItemsTitle = $("li .menu-item__title");

    $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
    $(".hamburger-toggle").toggleClass("is-opened");

    if ($("body").hasClass("sidebar-is-expanded")) {
      $('[data-toggle="tooltip"]').tooltip("destroy");
    } else {
      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }

  };

  return {
    init: () => {
      $(".js-hamburger").on("click", sidebarChangeWidth);

      $(".js-menu li").on("click", e => {
        menuChangeActive(e.currentTarget);
      });

      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    } };

})();

Dashboard.init();
  </script>

		  </body>

</html> 
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   
</div>

</body>
</html>