<?php include 'header.php';?>

<style type="text/css">
	.hero .overlay:before {
    content: "";
    position: absolute;
    background: rgba(0, 0, 0, 0.6);
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

@keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

@-webkit-keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

.wrapper {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  animation: fadeIn 1000ms ease;
  -webkit-animation: fadeIn 1000ms ease;
  
}

</style>
<div class="hero overlay" 
style="background-image: url('images/harare-home-banner-1.jpg');">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12 wrapper" style="text-align:center;">

 <h1 class="text-white" ><span style="background: black;text-shadow: 2px 1px;"> Coming Soon !!! </span></h1>
<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
<div id="date-countdown"></div>
<p>
<a href="#" class="btn btn-primary py-3 px-4 mr-3">Book Ticket</a>
<a href="#" class="more light">Learn More</a>
</p> --> 

</div>
</div>
</div>
</div>


<?php include 'footer.php';?>

