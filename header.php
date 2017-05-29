<?php
include_once "includes/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--material header-->
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="icons/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--end material header-->
</head>
<!-- material body-->
<body class="ind lighten-2">
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo black-text">IOT</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#" class="black-text">

                        <?php if(logged_in()) {
                            echo "Welcome " . get_name($_SESSION['email']);
                        }else{
                            echo "Welcome Guest";
                        }
                        ?>

                    </font></a></li>

            <?php if(!logged_in()) : ?>

                <li><a href="login.php" class="black-text">Login</a></li>
                <li><a href="opt-in.php" class="black-text">Opt-in</a></li>
                <li><a href="#" class="black-text">Help</a></li>

            <?php else : ?>

                <li><a href="admin.php" class="black-text">Dashboard</a></li>
                <li><a href="logout.php" class="black-text">Logout</a></li>
            <?php endif; ?>
        </ul>

        <ul id="nav-mobile" class="side-nav">

            <li><a href="#" class="black-text">

                    <?php if(logged_in()) {
                        echo "Welcome " . get_name($_SESSION['email']);
                    }else{
                        echo "Welcome Guest";
                    }
                    ?>

                    </font></a></li>

            <?php if(!logged_in()) : ?>

                <li><a href="login.php" class="black-text">Login</a></li>
                <li><a href="opt-in.php" class="black-text">Opt-in</a></li>
                <li><a href="#" class="black-text">Help</a></li>

            <?php else : ?>

                <li><a href="admin.php" class="black-text">Dashboard</a></li>
                <li><a href="logout.php" class="black-text">Logout</a></li>
            <?php endif; ?>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse black-text"><i class="material-icons">menu</i></a>

    </div>

</nav>




	
		