<?php
?>
<html>
    <head>
    <title>Reyna Discord Bot</title>
    <link rel="icon" type="img/png"href="https://reyna-discordbot.000webhostapp.com/images/reyna.webp"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script>
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
    function mischandler(){
    return false;
    }
    function mousehandler(e){
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if((eventbutton==2)||(eventbutton==3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
  </script>
    </head>
    <body>
    <nav  class="navbar navbar-light navbar-expand-lg navbar-dark" style="background-color: #34383c;">
<a class="navbar-brand" href="#">
    <img src="https://reyna-discordbot.000webhostapp.com/images/reyna.webp" width="30" height="30" alt="" loading="lazy">
  </a>
  <a class="navbar-brand" href="#">Reyna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="moderation/">Moderation<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="music/">Music<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://playvalorant.com/en-gb/">Valorant<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://discord.gg/CyEuyD8">Support Server<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
   <!-- Welcome, //<?php //echo $_SESSION['username']; ?>!
    <a href="../logout.php">Logout</a>-->
    <button onclick="OAUTH2();" style="background-color: aquamarine;">Add Now</button>
    </span>
  </div>
</nav>
<div class="background">
  <div class="web-logo">
    <img src="https://reyna-discordbot.000webhostapp.com/images/web_logo.png" alt="valorant-log">
  </div>
 
<img src="https://reyna-discordbot.000webhostapp.com/images/Reyna_Background.png" alt="Reyna">
<div class="info-bot">
   <img src="http://localhost/Reyna/img/info-box.png" alt="info-bot">
  </div>
  <div class="headerone">
  Add Reyna Now
  </div>
<div class="button-invite">
  <button class="invite" onclick="OAUTH2();">
    <img src="http://localhost/Reyna/img/discord-logo.png" alt="discord-img" style="width: 64px; height: 64px;">
  Add To Discord
</button>
  </div>
</div>
<br class="footer"/>
<div class="footer">

</div>
     <br/>
  <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.min.js"></script>
  <script language="javascript">
      $(function() {
          toastr.options = {
             "closeButton": true,
             "debug": false,
             "positionClass": "toast-bottom-right",
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "0",
             "extendedTimeOut": "1000",
             "showEasing": "swing",
             "hideEasing": "linear",
             "showMethod": "fadeIn",
             "hideMethod": "fadeOut"
          }
    toastr.info("<p'>Cookies help us deliver our services. By using our services, you agree to our use of cookies. <a href='#' target='_new'>More details</a></p>");
      });
  </script>
   <link rel="stylesheet" href="http://localhost/Reyna/css/pages/images.css"/>
   <link rel="stylesheet" href="http://localhost/Reyna/css/pages/scrollbar.css"/>
     <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
     <link rel="stylesheet" href = "http://localhost/Reyna/css/pages/cookies-agreement.css"/>
     <link rel="stylesheet" href = "http://localhost/Reyna/css/pages/font.css"/>
     <link rel="stylesheet" href="http://localhost/Reyna/css/pages/footer.css"
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/event/button.js"></script>
    </body>
</html>