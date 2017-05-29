<?php
include_once "header.php";
include_once "login_nav.php";
if(!logged_in()) {
    redirect("index.php");
}
else{
    //redirect(".php");

}
?>

<div class="container">

    <?php
    $role= get_designation($_SESSION['email']);
    switch($role) {

        case 'Head Of Department' :
            ?>





            <?php
            break;
        case 'Human Resource ' :
            ?>



            <?php
            break;
        default:

            ?>
                <br/>
                <div class="row">

                    <div class="col s12">
                        <div class="card">
                            <br/>
                                <div class="card-title" align="center">Your Dashboard</div>
                                <div class="card-content">
                                   <div class="row">

                                       <a href="#homeui" class="hide-on-small-only">
                                           <div class="col s4 center-align">
                                                   <i class="material-icons large deep-orange-text"  style="font-size: 80px">store<i class="material-icons deep-orange-text">settings_remote</i></i>
                                                   <p>Home Board</p>
                                           </div>
                                       </a>

                                       <a href="#homeui" class="hide-on-large-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 60px">store<i class="material-icons deep-orange-text">settings_remote</i></i>
                                               <p>Home Board</p>
                                           </div>
                                       </a>

                                       <a href="media.php" class="hide-on-small-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 70px">perm_media</i>
                                               <p>Media</p>
                                           </div>
                                       </a>

                                       <a href="media.php" class="hide-on-large-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 50px">perm_media</i>
                                               <p>Media</p>
                                           </div>
                                       </a>

                                       <a href="message.php" class="hide-on-small-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 90px">forum</i>
                                               <p>Messages</p>
                                           </div>
                                       </a>

                                       <a href="message.php" class="hide-on-large-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 60px">forum</i>
                                               <p>Messages</p>
                                           </div>
                                       </a>


                                       <a href="analysis.php" class="hide-on-small-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 90px">trending_up</i>
                                               <p>Energy Analysis</p>
                                           </div>
                                       </a>

                                       <a href="analysis.php" class="hide-on-large-only">
                                           <div class="col s4 center-align">
                                               <i class="material-icons large deep-orange-text"  style="font-size: 60px">trending_up</i>
                                               <p>Energy Analysis</p>
                                           </div>
                                       </a>






                                       <!--Notification Modal Structure -->
                                       <div id="homeui" class="modal">
                                           <div class="modal-content">
                                               <h4>Choose Interaction Mode</h4>

                                               <div class="row">

                                                   <a href="menuui.php" class="hide-on-small-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 90px">thumbs_up_down</i>
                                                           <p>Buttons Mode</p>
                                                       </div>
                                                   </a>

                                                   <a href="menuui.php" class="hide-on-large-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 60px">thumbs_up_down</i>
                                                           <p>Buttons Mode</p>
                                                       </div>
                                                   </a>

                                                   <a href="voice.php" class="hide-on-small-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 90px">mic</i>
                                                           <p>Voice Mode</p>
                                                       </div>
                                                   </a>

                                                   <a href="voice.php" class="hide-on-large-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 60px">mic</i>
                                                           <p>Voice Mode</p>
                                                       </div>
                                                   </a>

                                                   <a href="timer.php" class="hide-on-small-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 90px">query_builder</i>
                                                           <p>Timer Mode</p>
                                                       </div>
                                                   </a>

                                                   <a href="timer.php" class="hide-on-large-only">
                                                       <div class="col s4 center-align">
                                                           <i class="material-icons large deep-orange-text"  style="font-size: 60px">query_builder</i>
                                                           <p>Timer Mode</p>
                                                       </div>
                                                   </a>

                                               </div>


                                           </div>

                                       </div>



                                   </div>
                                </div>
                                <div class="card-action">
                                    <a href="#">Thank you bye</a>
                                </div>
                            </div>
                    </div>


                </div>

            <?php

            }
    ?>












</div>

<?php
include_once "footer.php";
?>