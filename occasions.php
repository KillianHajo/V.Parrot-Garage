<?php include('head.php')?>
<body>
        <?php include('nav.php') ?>

<section class="shop">

<div class="container9">
        <div class="sidebar">
                <div class="sidehead">
                        <div class="dots">
                                <i class="fa-solid fa-circle">Garage</i>
                                <i class="fa-solid fa-circle" style="color: #000;">V</i>
                                <i class="fa-solid fa-circle">Parrot</i>
                        </div>
                        <hr style="margin: 15px 0; border: 1px solid #eee;">
                </div>
                <div class="sidebody">
                        <div class="searchbar">
                                <input class="shop-input" placeholder="Rechercher..." id="searchBar" name="searchBar" type="text">
                                <i class="fa-solid fa-magnifying-glass glass"></i>
                        </div>



                        <div class="wrapper2">
        <div class="values">
            <span id="range1">
                0
            </span>
            <span> &dash; </span>
            <span id="range2">
                10000
            </span>
        </div>
        <div class="container10">
            <div class="slider-track"></div>
            <input type="range" min="0" max="3000" value="6000" id="slider-1" oninput="slideOne()">
            <input type="range" min="0" max="10000" value="10000" id="slider-2" oninput="slideTwo()">
        </div>
    </div>
    
    <!--Script-->
    <script src="filter.js"></script>


                        <a href="index.php"><div class="end-logo"><img src="assets/Garage V.Parrot.png" class="logo" alt="logo"></div></a>
                </div>
                <div class="sidefoot">
                        <hr style="margin: 15px 0; border: 1px solid #eee;">
                        <div class="social-icons">
                        <i class="fa-brands fa-square-facebook"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-twitter"></i>
                </div>
        </div>
</div>
<div class="data">
        <div class="header1">
                <p>Acheter en ligne ✔️ </p>
        </div>
        <div class="body1">
                <div id="root"></div>
        </div>
</div>
</div>
<script src="searchengine.js"></script>



        </section>














        <?php include('footer.php') ?>





</body>