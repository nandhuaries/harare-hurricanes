<?php include 'header.php'; ?>
<style>
    .players-name {
        background: white;
        text-align: center;
        color: black;
        display: none
    }

    .players-name h2 {
        color: black;
        font-size: 16px;
        margin: 0px 10px;
        padding: 10px
    }

    @media only screen and (max-width: 600px) {
        .players-name {
            background: white;
            /* height: 2px; */
            text-align: center;
            color: black;
            display: none
        }

        .players-name h2 {
            color: black;
            /* font-size: 16px; */
            font-size: 10px;
            margin: 0px 10px;
            padding: 10px
        }
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

    a :hover {
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
<!-- height:120vh; removed class from background image -->
<div class="hero overlay" style="background-image: url('images/harare-home-banner-1.jpg');position:relative; background-repeat: no-repeat;">
    <!-- <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ml-auto">
                <h1 class="text-white">Coming Soon</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                <div id="date-countdown"></div>
                <p>
                    <a href="#" class="btn btn-primary py-3 px-4 mr-3">Book Ticket</a>
                    <a href="#" class="more light">Learn More</a>
                </p>
            </div>
        </div>
    </div> -->
</div>
<!-- players slider -->
<!-- <div class="container" style="padding: 40px 0 0px 0;">
    <div class="col-12 title-section">
        <div class="row text-center justify-content-center">
            <h2 class="heading" style="font-size:30px;font-weight:600">THE SQUAD</h2>
        </div>
    </div>
</div>
<div class="swiper-container" style="background-image: url(https://wallpapercave.com/wp/wp3049863.jpg);">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-04/virat%20kohli%20RCB.png" />

            <div class="players-name" style="display: block">
                <h2>Eoin Morgan</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/faf%20du%20plessis%20RCB.png" />
            <div class="players-name">
                <h2>Sreesanth S</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/Shahbaz%20Ahamad%20RCB.png" />
            <div class="players-name">
                <h2>Irfan Pathan</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/Finn%20Allen%20RCB.png" />
            <div class="players-name">
                <h2>Shahnawaz Dahani</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Duan Jansen</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Chris Mpofu</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Luke Jongwe</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Brandon Mavuta</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Tashinga Musekiwa</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Khalid Shah</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Kevin Koththigoda</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Regis Chakabva</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Samit Patel</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Donovan Ferreira</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Mohammad Nabi</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Evin Lewis</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://www.royalchallengers.com/PRRCB01/public/2023-03/anuj%20rcb.png" />
            <div class="players-name">
                <h2>Robin Uthappa</h2>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div> -->
<!-- end players slider -->
<div class="container mt-5 mb-5">
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


<?php include 'footer.php'; ?>