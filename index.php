<?php
include_once "header.php";
if(logged_in()) {
    redirect("admin.php");
}


?>
    <div id="index-banner" class="parallax-container">

        <div class="parallax"><img src="image/top-10-companies-in-the-internet-of-things-2015-1.jpg" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons large">thumbs_up_down</i></h2>
                        <h5 class="center">Button Mode</h5>

                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons large">mic</i></h2>
                        <h5 class="center">Voice BOT</h5>

                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons large">query_builder</i></h2>
                        <h5 class="center">Timer</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">

            </div>
        </div>
        <div class="parallax"><img src="image/iot.jpg" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Raspberry Pi 3</h4>
                    <p class="left-align light">The Raspberry Pi 3 is the third generation Raspberry Pi. It replaced the Raspberry Pi 2 Model B in February 2016. Compared to the Raspberry Pi 2 it has:

                        A 1.2GHz 64-bit quad-core ARMv8 CPU
                        802.11n Wireless LAN
                        Bluetooth 4.1
                        Bluetooth Low Energy (BLE)</div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">

            </div>
        </div>
        <div class="parallax"><img src="image/ss-2-bg.jpg" alt="Unsplashed background img 3"></div>
    </div>


<?php
include_once "footer.php";
?>