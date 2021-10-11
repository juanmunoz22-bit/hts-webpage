<?php
echo '<div class="header-top ">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-2 col-md-4">
				<div class="header-top-socials text-center text-lg-left text-md-left">
					<a href="https://www.facebook.com/htscorpsas" target="_blank"><i class="ti-facebook"></i></a>
					<a href="https://instagram.com/htscorpsas" target="_blank"><i class="ti-instagram"></i></a>
					<a href="https://linkedin.com" target="_blank"><i class="ti-linkedin"></i></a>
				</div>
			</div>
			<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
				<div class="header-top-info">
					<a href="tel:+57-321-4553812"><i class="fas fa-mobile-alt"></i><span> +57-321-455-3812</span></a>
					<a href="mailto:gerencia.comercial@htscorp.com.co" ><i class="fa fa-envelope mr-2"></i><span>gerencia.comercial@htscorp.com.co</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item @@service">
          <a class="nav-link" href="service.html">Service</a>
        </li>
        <li class="nav-item @@gallery">
          <a class="nav-link" href="gallery.html">Gallery</a>
        </li>
        <li class="nav-item @@team">
          <a class="nav-link" href="team.html">Team</a>
        </li>
        <li class="nav-item @@appointment">
          <a class="nav-link" href="appointment.html">Appointment</a>
        </li>
        <li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
            <li><a class="dropdown-item @@blogDetails" href="blog-details.html">Blog Details</a></li>
            <li class="dropdown dropdown-submenu dropright">
              <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
    
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>'
?>