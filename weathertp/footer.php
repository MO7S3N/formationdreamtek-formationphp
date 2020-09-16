<?require 'class/OpenWeather.php'; ?>
<div class="back">
                 <div class="header">
                  <?php foreach($forecast as $day): ?>   
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center"><?php echo $day['weather'][0]['main']; ?></h4>
                         <p class="text-center"><?php echo $day['weather'][0]['description']; ?></p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4><?php echo $day['wind']['speed']; ?> KM/h</h4>
                                 <p>
                                     speed
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4><?php echo $day['main']['temp']; ?> °C</h4>
                                 <p>
                                     temperature 
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4><?php echo $day['main']['humidity']; ?></h4>
                                 <p>
                                     humidity
                                 </p>
                             </div>
                         </div>
                        <?php endforeach ; ?>
                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
