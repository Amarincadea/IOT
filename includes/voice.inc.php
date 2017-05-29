
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$req=$_POST['q'];


 switch ($req)  {
     case "hello buddy":
         ?>
         <script>
             var msg = new SpeechSynthesisUtterance('Hi bro,how was a day');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php

         break;



     case "hello":
         ?>
         <script>
             var msg = new SpeechSynthesisUtterance('Hi bro,how was a day');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php

         break;

     case "hi":
         ?>
         <script>
             var msg = new SpeechSynthesisUtterance('Hi bro,how was a day');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php

         break;

     case "tell me about yourself":
         ?>
         <script>
             var msg = new SpeechSynthesisUtterance('Hi, My name is Home bot,developed by the founder of my need they need dot com,his name is Amarnath a 		web developer');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php

         break;



     case "who are you":
         ?>
         <script>
             var msg = new SpeechSynthesisUtterance('Hi, My name is Home Bot,developed by the founder of my need they need dot com,his name is Amarnath a web developer');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php

         break;



     case "inside light on":

         $email=$_SESSION['email'];
         $status='on';
         $pin=7;

         system("sudo gpio mode 7 out");
         system("sudo gpio write 7 1");

         $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

         $conn->query($sql);


         ?>

         <script>
             var msg = new SpeechSynthesisUtterance('Inside Light is turned on now');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php
         break;

     case "inside light off":

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

     case "outside light on":

     $email=$_SESSION['email'];
     $status='on';
     $pin=1;

         system("sudo gpio mode 1 out");
         system("sudo gpio write 1 1");

     $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

     $conn->query($sql);


     ?>

     <script>
         var msg = new SpeechSynthesisUtterance('Outside Light is turned on now');
         window.speechSynthesis.speak(msg);
         utterThis.pitch = 2.5;
         synth.speak(utterThis);
     </script>

     <?php
     break;


     case "outside light off":

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

     case "switch on fan":

         $email=$_SESSION['email'];
         $status='on';
         $pin=2;

         system("sudo gpio mode 2 out");
         system("sudo gpio write 2 1");

         $sql = "INSERT INTO pin_entry (email, gpio, status, date_added)
		VALUES ('$email', '$pin', '$status', now())";

         $conn->query($sql);


         ?>

         <script>
             var msg = new SpeechSynthesisUtterance('Fan is turned on now');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php
         break;


     case "switch off fan":

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
             var msg = new SpeechSynthesisUtterance('Sorry bro you have not trained me for this');
             window.speechSynthesis.speak(msg);
             utterThis.pitch = 2.5;
             synth.speak(utterThis);
         </script>

         <?php
 }




}
?>