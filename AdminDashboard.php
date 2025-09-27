<h1 style="text-align: center;">Dashboard</h1>
<body style="background-color: lightgray;">
	<div class="tm-container" style="margin-left: 30%;width: 1%;">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-fish" style="margin-right: 25px;
              margin-left: 25px;
              font-size: 1.5rem;"></i>
            <h1 class="tm-site-name">SeaWave</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="dashboard.php" class="tm-page-link active">
                 <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                     <span>User's</span>
                </a>
              </li> 
              <li class="tm-page-nav-item">
                <a href="ordersDashboard.php" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Order's</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="contactusDashboard.php" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>ContactUs</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="menu.php" class="tm-page-link">
                  <i class="fas fa-sign-in-alt" style="margin-right: 25px;
                     margin-left: 25px;
                     font-size: 1.5rem;"></i>
                  <span>Menu</span>
                </a>

    <link rel="stylesheet" href="css/tooplate-wave.css">
<?php

require'config.php';

if (empty($_SESSION['fullname'])) {
	

}
$sql="SELECT * from users";
$prep=$con->prepare($sql);
//$prep->execute();
//$datas=$prep->fetchAll();
//var_dump ($datas);die;
?>
<?php require 'header.php'?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap ">
			<a class="nav-link" href="logout.php">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid" style="">
	<div class="row">
		<nav class="col-md-2 d-none d-md-blocl bg-light sidebar">
		<div class="sidebar-sticky">
		<ul class="nav flex-column">
		<li class="nav-item">
		<a class="nav-link active" href="dashboard.php">
		<span data-feather="home"></span>
		Dashboard<span class="sr-only">(current)</span>
		</a>
		</li>
		<li class="nav-item">
			<a  class="nav-link active" href="users.php">
				<span data-feather="users"></span>
				users

			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				<span data-feather="file"></span>
			</a>
		</li>

			</ul>
		</div>
		</nav>


	</div>
</div>


</body>
<div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }
     $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });  
  
  </script>