<?php
include_once "header.php";
include_once "includes/login.inc.php";

if(logged_in()) {
    redirect("admin.php");
}
?>
<div class="container">


    <div class="col s12 m7">

        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="image/downloads_img.jpg">
                <h1 class="card-title">Login</h1>
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <div class="center-align">
                        <?php display_message(); ?>
                    </div>
                    <form class="col s12" id="loginform"  method="post" role="form">
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
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5"><R>Remember Me</R></label>
                                </p>
                            </div>
                        </div>
                        <div class="right-align orange-text">
                            <button class="btn waves-effect orange" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
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