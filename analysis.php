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
                        <span class="card-title">Your log history</span>
                    </div>
                    <div class="card-content">


                        <ul class="collection">
                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-lightbulb-o large" aria-hidden="true"></i></i>
                                <span class="title">Light 1</span>

                                <div class="secondary-content">
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%7%' AND status LIKE '%on%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                   <h5>On Count:<?php echo $result->num_rows; ?></h5>
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%7%' AND status LIKE '%off%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                    <h5>Off Count:<?php echo $result->num_rows; ?></h5><br/>
                                </div>
                            </li>

                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-lightbulb-o large" aria-hidden="true"></i></i>
                                <span class="title">Light 2</span>

                                <div class="secondary-content">
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%1%' AND status LIKE '%on%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                    <h5>On Count:<?php echo $result->num_rows; ?></h5>
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%1%' AND status LIKE '%off%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                    <h5>Off Count:<?php echo $result->num_rows; ?></h5><br/>
                                </div>
                            </li>

                            <li class="collection-item">
                                <i class="material-icons red-text"><i class="fa fa-asterisk large" aria-hidden="true"></i></i>
                                <span class="title">Fan</span>

                                <div class="secondary-content">
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%2%' AND status LIKE '%on%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                    <h5>On Count:<?php echo $result->num_rows; ?></h5>
                                    <?php
                                    $email=$_SESSION['email'];
                                    $sql = "SELECT * FROM pin_entry WHERE email LIKE '%$email%' AND gpio LIKE '%2%' AND status LIKE '%off%' ";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>
                                    <h5>Off Count:<?php echo $result->num_rows; ?></h5><br/>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>



        </div>

    </div>


    </div>


    </div>

<?php
include_once "footer.php";
?>