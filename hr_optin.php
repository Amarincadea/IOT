<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/18/2017
 * Time: 3:56 PM
 */
include_once "header.php";
include_once "includes/hr.approve.inc.php";
include_once "login_nav.php";
?>

<div class="container">
    <div class="row">

        <div class="col s12">
            <!-- Grid for searching Team member details -->
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light purple darken-4">
                    <div class="icon-block">
                        <img class="activator" src="image/ss-2-bg.jpg">

                        <h1 class="card-title">Opt-In Requests:Pending for Approval</h1>

                    </div>
                </div>
                <div class="card-content">
                    <div class="row">
                        <table class="highlight">

                            <?php

                            $sql = "SELECT * FROM optin WHERE hod_status LIKE '%Approved%' AND hr_status LIKE '%Pending%'";

                            $result = $conn->query($sql);
                            if($result->num_rows == 0){
                                echo "No request found";
                            }else {
                            ?>
                            <thead>
                            <tr>
                                <th>Team Member ID</th>
                                <th>Team Memeber Name</th>
                                <th>Designation</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>

                                <?php

                                while ($row = $result->fetch_assoc()) {

                                    ?>
                                    <td><?php echo $row['Emp_id']; ?></td>
                                    <td><?php echo get_name($row['Emp_email']); ?></td>
                                    <td><?php echo $row['Designation']; ?></td>
                                    <td>
                                        <form method="post" action="">
                                            <input type="hidden" value="<?php echo $row['Emp_email']; ?>" name="email"/>
                                            <button class="btn waves-effect waves-light orange" type="submit" name="hod">Approve</button>
                                        </form>
                                    </td>
                                    <?php

                                }
                                }
                                ?>

                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <!-- End of Grid searching Team member details -->
        </div>

    </div>

</div>
<?php
require_once "footer.php";
?>