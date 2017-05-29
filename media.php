<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/27/2017
 * Time: 2:48 PM
 */
include_once "header.php";
include_once "login_nav.php";
include_once "includes/media.inc.php";
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
                        <span class="card-title">Your Media</span>
                        <a href="#media" class="btn-floating halfway-fab waves-effect waves-light btn-large red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <ul class="collection">
                        <?php
                        $email=get_name($_SESSION['email']);
                        $sql = "SELECT * FROM media WHERE Emp_email LIKE '%$email%'";

                        $result = $conn->query($sql);
                        if($result->num_rows>0){

                            while ($row = $result->fetch_assoc())
                            {

                                ?>
                                <li class="collection-item avatar">
                                <i class="material-icons circle">folder</i>
                                <span class="title">File name</span>
                                <p><?php echo $row['file_path']; ?> <br>

                                </p>
                                <a href="<?php echo $row['file_path']; ?>" target="_blank" class="secondary-content"><i class="material-icons">play_for_work</i></a>
                            </li>
                                <?php
                            }
                        }else{
                            ?>
                            <li class="collection-item avatar">
                                <i class="material-icons circle">folder</i>
                                <span class="title">Name</span>
                                <p>Empty Directory <br>

                                </p>
                            </li>
                            <?php
                            }

                                ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div id="media" class="modal">
                <div class="modal-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="image/ss-2-bg.jpg">
                                    <span class="card-title">Add Your Media</span>
                                </div>

                                <div class="card-content">

                                    <form class="col s12"  method="post" role="form" action="" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Click here to upload file.<i class="material-icons">attach_file</i></span>
                                                    <input type="file" name="image">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="email" value="<?php echo get_name($_SESSION['email']); ?>"/>
                                </div>
                                <div class="right-align orange-text center-align">
                                    <button class="btn waves-effect orange" type="submit">Upload Now
                                        <i class="material-icons right">publish</i>
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

    </div>


    </div>


    </div>

<?php
include_once "footer.php";
?>