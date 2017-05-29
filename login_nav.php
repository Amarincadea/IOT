<?php
$role= get_designation($_SESSION['email']);
switch($role) {

    case 'Head Of Department' :
        ?>

        <nav class="blue-grey darken-1">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo right"> <h2><?php echo get_designation($_SESSION['email']); ?></h2></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="#">Account</a></li>
                    <li><a href="hod_optin.php">Opt-In<span class="new badge deep-orange">
                  <?php echo get_optin_hod_count();?></span></a></li>
                    <li><a href="#">Pay-Out<span class="new badge deep-orange">4</span></a></li>
                    <li><a href="#">Archive Transactions</a></li>

                </ul>
            </div>
        </nav>



        <?php
        break;
    case 'Human Resource ' :
        ?>

        <nav class="blue-grey darken-1">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo right">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="#">Account</a></li>
                    <li><a href="hr_optin.php">Opt-In<span class="new badge deep-orange">
                  <?php echo get_optin_hr_count();?></span></a></li>
                    <li><a href="#">Pay-Out<span class="new badge deep-orange">4</span></a></li>
                    <li><a href="#">Archive Transactions</a></li>

                </ul>
            </div>
        </nav>

        <?php
        break;
        default:
        ?>

            <nav class="blue-grey darken-1">
                <div class="nav-wrapper container">
                    <a href="#" class="brand-logo right">
                    <ul  class="left">

                        <li><a href="#notify">Notifications<span class="new badge deep-orange">0</span></a></li>


                    </ul>
                </div>
            </nav>

            <!--Notification Modal Structure -->
            <div id="notify" class="modal">
                <div class="modal-content">
                    <h4>Notification Header</h4>
                    <p>Sorry you have no notifications here.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">CLOSE</a>
                </div>
            </div>

        <?php
}
?>





 <!-- Tool bar-->
 <div class="fixed-action-btn toolbar">
     <a class="btn-floating btn-large  green darken-4 z-depth-5 pulse">
         <i class="large material-icons white-text">view_quilt</i>
     </a>
     <ul>
         <li class="waves-effect waves-light"><a href="menuui.php"><i class="material-icons white-text">thumbs_up_down</i></a></li>
         <li class="waves-effect waves-light"><a href="voice.php"><i class="material-icons white-text">mic</i></a></li>
         <li class="waves-effect waves-light"><a href="timer.php"><i class="material-icons white-text">query_builder</i></a></li>
         <li class="waves-effect waves-light"><a href="index.php"><i class="material-icons white-text">store</i></a></li>
     </ul>
 </div>
 <!--End Tool bar-->

