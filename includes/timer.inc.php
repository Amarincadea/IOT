
<?php
ini_set('max_execution_time', 0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $req=$_POST['pin'];
    $num=$_POST['nmin'];


   switch ($req)  {
        case "7":

            for($i=0;$i<$num;$i++)
            {
                sleep(30);
                sleep(30);
            }

            $email=$_SESSION['email'];
            $status='off';
            $pin=7;

            system("sudo gpio mode 7 out");
            system("sudo gpio write 7 0");

            $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

            $conn->query($sql);


            ?>

            <script>
                var msg = new SpeechSynthesisUtterance('Inside Light is turned off now');
                window.speechSynthesis.speak(msg);
                utterThis.pitch = 2.5;
                synth.speak(utterThis);
            </script>

            <?php
            break;

        case "1":

            for($i=0;$i<$num;$i++)
            {
                sleep(30);
                sleep(30);
            }

            $email=$_SESSION['email'];
            $status='off';
            $pin=1;

            system("sudo gpio mode 1 out");
            system("sudo gpio write 1 0");

            $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

            $conn->query($sql);


            ?>

            <script>
                var msg = new SpeechSynthesisUtterance('Outside Light is turned off now');
                window.speechSynthesis.speak(msg);
                utterThis.pitch = 2.5;
                synth.speak(utterThis);
            </script>

            <?php
            break;

        case "2":

            for($i=0;$i<$num;$i++)
            {
                sleep(30);
                sleep(30);
            }

            $email=$_SESSION['email'];
            $status='off';
            $pin=2;

            system("sudo gpio mode 2 out");
            system("sudo gpio write 2 0");

            $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

            $conn->query($sql);


            ?>

            <script>
                var msg = new SpeechSynthesisUtterance('Fan is turned off now');
                window.speechSynthesis.speak(msg);
                utterThis.pitch = 2.5;
                synth.speak(utterThis);
            </script>

            <?php
            break;

        default:
            ?>
            <script>
                var msg = new SpeechSynthesisUtterance('Sorry bro you have not selected any device');
                window.speechSynthesis.speak(msg);
                utterThis.pitch = 2.5;
                synth.speak(utterThis);
            </script>

            <?php
    }




}
?>