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
    /* point table style */
    @media screen and (max-width: 576px) {
        .point-tab {
            font-size: 11px;
            text-align: center;
        }

        .point-tab th {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .point-tab td {
            padding-left: 1px;
            padding-right: 1px;
        }
    }

    /* end point table style */
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
<div class="container" style="padding: 40px 0 0px 0;">
    <div class="col-12 title-section">
        <div class="row text-center justify-content-center">
            <h2 class="heading" style="font-size:30px;font-weight:600">THE SQUAD</h2>
        </div>
    </div>
</div>
<div class="swiper-container" style="background-image: url(https://wallpapercave.com/wp/wp3049863.jpg);">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="images/players-slider/Eoin-Morgan-(2).png" />

            <div class="players-name" style="display: block">
                <h2>Eoin Morgan</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Sreesanth.png" />
            <div class="players-name">
                <h2>Sreesanth S</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Irfan-Pathan-9.png" />
            <div class="players-name">
                <h2>Irfan Pathan</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Nandre-Burger-1.png" />
            <div class="players-name">
                <h2>Nandre Burger</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Tinotenda-Maposa.png" />
            <div class="players-name">
                <h2>Tinotenda Maposa</h2>
            </div>
        </div>

        <div class="swiper-slide">
            <img src="images/players-slider/christopher-Mpofu.png" />
            <div class="players-name">
                <h2>Chris Mpofu</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Luke-Jongwe_2.png" />
            <div class="players-name">
                <h2>Luke Jongwe</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Brandon-Mavuta.png" />
            <div class="players-name">
                <h2>Brandon Mavuta</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Tashinga-Musekiwa-2.png" />
            <div class="players-name">
                <h2>Tashinga Musekiwa</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Khalid-Shah-2.png" />
            <div class="players-name">
                <h2>Khalid Shah</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Kevin-Koththigoda-2.png" />
            <div class="players-name">
                <h2>Kevin Koththigoda</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Regis-Chakabva.png" />
            <div class="players-name">
                <h2>Regis Chakabva</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Samit-Patel-1.png" />
            <div class="players-name">
                <h2>Samit Patel</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Donovan-Ferreira-1-(1)-copy.png" />
            <div class="players-name">
                <h2>Donovan Ferreira</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/nabi.png" />
            <div class="players-name">
                <h2>Mohammad Nabi</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Evin-Lewis-(3).png" />
            <div class="players-name">
                <h2>Evin Lewis</h2>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/players-slider/Robin-Uthappa.png" />
            <div class="players-name">
                <h2>Robin Uthappa</h2>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<!-- end players slider -->


<!-- schedule -->
<!-- <div class="container mt-5 mb-5">
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
</div> -->
<!-- end schedule -->

<!-- point table -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading" style="font-size:30px;font-weight:600">Point Table</h2>
            </div>
            <div class="col-12">
                <div class="widget-next-match">
                    <table class="table custom-table table-responsive-sm point-tab">
                        <thead>
                            <tr>
                                <th>P</th>
                                <th>Team</th>
                                <th>M</th>
                                <th>W</th>
                                <th>L</th>
                                <th>NR</th>
                                <th>PTS</th>
                                <th>NRR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td> <img style="width: 40px;" src="images/scores/JoburgBuffaloes.jpg" alt=""> <strong class="text-white"> JBB</strong></td>
                                <td>9</td>
                                <td>5</td>
                                <td>4</td>
                                <td>0</td>
                                <td>10</td>
                                <td>0.761</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img style="width: 40px;" src="images/scores/DurbanQalanders.jpg" alt=""><strong class="text-white"> DQ</strong></td>
                                <td>9</td>
                                <td>5</td>
                                <td>4</td>
                                <td>0</td>
                                <td>10</td>
                                <td>0.071</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img style="width: 40px;" src="images/scores/HarareHurricanes.jpg" alt=""><strong class="text-white"> HRH</strong></td>
                                <td>9</td>
                                <td>5</td>
                                <td>4</td>
                                <td>0</td>
                                <td>10</td>
                                <td>-0.926</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img style="width: 40px;" src="images/scores/CapeTownSampArmy.jpg" alt=""> <strong class="text-white"> CTSA</strong></td>
                                <td>9</td>
                                <td>4</td>
                                <td>5</td>
                                <td>0</td>
                                <td>8</td>
                                <td>0.416</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img style="width: 40px;" src="images/scores/BulawayoBraves.jpg" alt=""><strong class="text-white"> BLB</strong></td>
                                <td>8</td>
                                <td>3</td>
                                <td>5</td>
                                <td>0</td>
                                <td>6</td>
                                <td>-0.351</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- end point table -->


<?php include 'footer.php'; ?>