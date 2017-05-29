<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/27/2017
 * Time: 2:48 PM
 */
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
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                        <img src="image/ss-2-bg.jpg">
                        <span class="card-title">Add Your Media</span>
                    </div>

                        <div class="card-content">
                            <div class="center-align">
                                <?php display_message(); ?>
                            </div>
                            <form class="col s12"  method="post" role="form">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix orange-text">email</i>
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email" data-error="wrong" data-success="right">Email ID</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix orange-text">vpn_key</i>
                                        <input id="eid" type="text" class="validate" name="eid" required>
                                        <label for="eid">Team Member ID</label>
                                    </div>
                                </div>

                                </div>
                                <div class="right-align orange-text center-align">
                                    <button class="btn waves-effect orange" type="submit">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                    <br/>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

<?php
include_once "footer.php";
?>