<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/27/2017
 * Time: 2:48 PM
 */
include_once "header.php";
include_once "login_nav.php";
include_once "includes/menuui.inc.php";
if(!logged_in()) {
    redirect("index.php");
}
else{
    //redirect(".php");

}
?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">

                    <div class="card-content"><p><?php echo display_message(); ?></p>
                        <ul class="collection">
                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-lightbulb-o large" aria-hidden="true"></i></i>
                                <span class="title">Light 1</span>

                                <div class="secondary-content">
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="7"/>
                                        <input type="hidden" name="status" value="on">
                                        <button class="btn-floating left-align" type="submit" name="led1_on">
                                            <i class="large material-icons green">done</i>
                                        </button>
                                    </form>
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="7"/>
                                        <input type="hidden" name="status" value="off">
                                        <button class="btn-floating  left-align" type="submit" name="led1_off">
                                            <i class="large material-icons red">power_settings_new</i>
                                        </button>
                                    </form><br/>
                                </div>
                           </li>

                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-lightbulb-o large" aria-hidden="true"></i></i>
                                <span class="title">Light 2</span>
                                <div class="secondary-content">
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="1"/>
                                        <input type="hidden" name="status" value="on">
                                        <button class="btn-floating left-align" type="submit" name="led2_on">
                                            <i class="large material-icons green">done</i>
                                        </button>
                                    </form>
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="1"/>
                                        <input type="hidden" name="status" value="off">
                                        <button class="btn-floating left-align" type="submit" name="led2_off">
                                            <i class="large material-icons red">power_settings_new</i>
                                        </button>
                                    </form><br/>
                                </div>
                            </li>

                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-asterisk large" aria-hidden="true"></i></i>
                                <span class="title">Fan</span>
                                <div class="secondary-content">
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="2"/>
                                        <input type="hidden" name="status" value="on">
                                        <button class="btn-floating left-align" type="submit" name="fan_on">
                                            <i class="large material-icons green">done</i>
                                        </button>
                                    </form>
                                    <form method="post" role="form" action="">
                                        <input type="hidden" name="pin" value="2"/>
                                        <input type="hidden" name="status" value="off">
                                        <button class="btn-floating left-align" type="submit" name="fan_off">
                                            <i class="large material-icons red">power_settings_new</i>
                                        </button>
                                    </form><br/>
                                </div>
                            </li>
                        </ul>



                    </div>
                </div>
            </div>


        </div>

    </div>



<?php
include_once "footer.php";
?>