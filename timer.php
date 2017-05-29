<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/27/2017
 * Time: 2:48 PM
 */
include_once "header.php";
include_once "login_nav.php";
include_once "includes/timer.inc.php";
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
                    <div class="card-content">
                        <div class="center-align"><i class="large material-icons red-text" style="font-size: 250px">query_builder</i></div>
                        <form  method="POST" action="">
                            <div class="row">
                                <div class="col s6">
                                    <label>Device</label>
                                    <select class="browser-default" name="pin">
                                        <option value="7">Inside Light</option>
                                        <option value="1">Outside Light</option>
                                        <option value="12">Fan</option>
                                    </select>
                                </div>
                                <div class="col s6">
                                    <label>Time</label>
                                    <select class="browser-default" name="nmin">
                                        <option value="1">1 Minute</option>
                                        <option value="2">2 Minutes</option>
                                        <option value="5">5 Minutes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="right-align white-text">
                                <button class="btn waves-effect green" type="submit" name="action">Timer On
                                    <i class="material-icons right">query_builder</i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>



<?php
include_once "footer.php";
?>