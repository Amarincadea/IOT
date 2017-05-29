<div id="timer"></div>
<script type="text/javascript">
    var timeoutHandle;
    function countdown(minutes) {
        var seconds = 60;
        var mins = minutes
        function tick() {
            var counter = document.getElementById("timer");
            var current_minutes = mins-1
            seconds--;
            counter.innerHTML =
                current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
            if( seconds > 0 ) {
                timeoutHandle=setTimeout(tick, 1000);
            } else {

                if(mins > 1){


                    setTimeout(function () { countdown(mins - 1); }, 1000);

                }
            }
        }
        tick();
    }

    countdown(1);

</script>

<?php
/**
 * Created by PhpStorm.
 * User: RameshA
 * Date: 5/28/2017
 * Time: 6:46 PM
 */
ini_set('max_execution_time', 0);

for($i=0;$i<1;$i++) {


    sleep(30);

    sleep(30);
}
?>