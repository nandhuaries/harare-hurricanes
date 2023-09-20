<?php include 'header.php'; ?>

<div class="container site-section" id="about-us">
  <!-- <div class="row mobresp" style="margin-top:100px;"> -->
  </div>


</div>


<!-- <div class="hero overlay" style="background-image: url('images/harare-home-banner-1.jpg');">
  <div class="container">
    <div class="row align-items-center">
      
    </div>
  </div>
</div> -->
<!-- match schedule -->
<div class="container mb-5" style="margin-top:100px;">
  <div class="row">
    <div class="col-6 title-section">
      <h2 class="heading" style="font-size:30px;font-weight:600">Match Schedule</h2>
    </div>
    <div class="col-6 " style="text-align: right;">
      <a class="blink" href="https://www.sportstiger.com/cricket/live-scores/9932/recent/zim-afro-t10-2023" target="_blank">Live Score</a>
    </div>

  </div>
  <div class="row justify-content-center">
    <div class="col-12 col-lg-4 col-md-6">
      <img class="img w-100 mt-3 mb-3" src="images/schedule/1.png" alt="Match Schedule">
    </div>
    <div class="col-12 col-lg-4 col-md-6">
      <img class="img w-100 mt-3 mb-3" src="images/schedule/2.png" alt="Match Schedule">
    </div>
    <div class="col-12 col-lg-4 col-md-6">
      <img class="img w-100 mt-3 mb-3" src="images/schedule/3.png" alt="Match Schedule">
    </div>
  </div>
  <!-- <div class="row justify-content-center">
    <div>
      <a href="https://www.sportstiger.com/cricket/live-scores/9932/recent/zim-afro-t10-2023" target="_blank">
        <button type="button" class="btn btn-primary p-3" data-dismiss="modal">Click To View The Live Score</button>
      </a>
    </div>
  </div> -->
</div>
<!-- end match schedule -->


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
    from {
      top: 20%;
      opacity: 0;
    }

    to {
      top: 100;
      opacity: 1;
    }

  }

  @-webkit-keyframes fadeIn {
    from {
      top: 20%;
      opacity: 0;
    }

    to {
      top: 100;
      opacity: 1;
    }

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

  /* blink btn style */
  .blink {
    background-color: #004A7F;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border: none;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: Arial;
    font-size: 20px;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    -webkit-animation: glowing 1500ms infinite;
    -moz-animation: glowing 1500ms infinite;
    -o-animation: glowing 1500ms infinite;
    animation: glowing 1500ms infinite;
  }
  a :hover{
    color: white !important;
  }

  @-webkit-keyframes glowing {
    0% {
      background-color: #B20000;
      -webkit-box-shadow: 0 0 3px #B20000;
    }

    50% {
      background-color: #FF0000;
      -webkit-box-shadow: 0 0 40px #FF0000;
    }

    100% {
      background-color: #B20000;
      -webkit-box-shadow: 0 0 3px #B20000;
    }
  }

  @-moz-keyframes glowing {
    0% {
      background-color: #B20000;
      -moz-box-shadow: 0 0 3px #B20000;
    }

    50% {
      background-color: #FF0000;
      -moz-box-shadow: 0 0 40px #FF0000;
    }

    100% {
      background-color: #B20000;
      -moz-box-shadow: 0 0 3px #B20000;
    }
  }

  @-o-keyframes glowing {
    0% {
      background-color: #B20000;
      box-shadow: 0 0 3px #B20000;
    }

    50% {
      background-color: #FF0000;
      box-shadow: 0 0 40px #FF0000;
    }

    100% {
      background-color: #B20000;
      box-shadow: 0 0 3px #B20000;
    }
  }

  @keyframes glowing {
    0% {
      background-color: #B20000;
      box-shadow: 0 0 3px #B20000;
    }

    50% {
      background-color: #FF0000;
      box-shadow: 0 0 40px #FF0000;
    }

    100% {
      background-color: #B20000;
      box-shadow: 0 0 3px #B20000;
    }
  }

  /* end blink btn style */
</style>


<?php include 'footer.php'; ?>