 <footer class="page-footer blue-grey darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Developed by-Amar</h5>
                <p class="text-lighten-4 white-text">Web Developer</p>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright grey darken-1">
            <div class="container white-text ">
            2017 Copyright ©Amar
            <a class="white-text text-lighten-4 right" href="#!">More about me</a>
            </div>
          </div>
        </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/init.js"></script>
      <script  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>

 <script>
     // Show sideNav
     $('.button-collapse').sideNav('show');
     // Hide sideNav
     $('.button-collapse').sideNav('hide');
     $(document).ready(function(){

         // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
         $('#notify').modal();
         $('#homeui').modal();
         $('#media').modal();

     });

     $(document).ready(function(){
         $('ul.tabs').tabs();
     });

 </script>
 <!----My Speech Recognition script---->
 <script>
     function startDictation() {

         if (window.hasOwnProperty('webkitSpeechRecognition')) {

             var recognition = new webkitSpeechRecognition();

             recognition.continuous = false;
             recognition.interimResults = false;

             recognition.lang = "en-US";
             recognition.start();

             recognition.onresult = function(e) {
                 document.getElementById('transcript').value
                     = e.results[0][0].transcript;
                 recognition.stop();
                 document.getElementById('labnol').submit();
             };

             recognition.onerror = function(e) {
                 recognition.stop();


             }

         }
     }
 </script>



    </body>
  </html>