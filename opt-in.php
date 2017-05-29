<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/17/2017
 * Time: 10:48 AM
 */

include_once "header.php";
include_once "includes/optin.inc.php";

if(logged_in()) {
    redirect("admin.php");
}
?>
    <div class="container">


        <div class="col s12 m7">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="image/Screen-Shot-2016-11-16-at-08.53.30.png" width="100%">
                    <h1 class="card-title">OPT-IN NOW</h1>
                </div>
                <div class="card-stacked">
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
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix orange-text">recent_actors</i>
                                    <input list="browser" name="des" placeholder="Designation" required>

                                    <datalist id="browser">
                                        <?php

                                        $sql = "SELECT * FROM designation";

                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc())
                                        {

                                            ?>
                                              <option value='<?php echo $row['Designation']; ?>'/><?php

                                        }
                                        ?>


                                    </datalist>

                                </div>
                            </div>
                            <div class="right-align orange-text">
                                <button class="btn waves-effect orange" type="submit">Submit
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