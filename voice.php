<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/27/2017
 * Time: 2:48 PM
 */
include_once "header.php";
include_once "login_nav.php";
include_once "includes/voice.inc.php";
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
                    <div class="card-content center-align">
                        <i class="large material-icons red-text" onclick="startDictation()" style="font-size: 250px">mic</i>
                        <form id="labnol" method="POST" action="">
                            <input type="text" name="q" id="transcript" placeholder="Speak.....">
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>



<?php
include_once "footer.php";
?>