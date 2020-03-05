<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Jura&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

  <style type="text/css">
  body
  {
    background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('images/back3.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    height: 100vh;
    font-size:15px;
    overflow-x: hidden;
    font-family: 'Jura', sans-serif;
    color: #fff;
  }
  .navbar-inverse li a
    {
      color: #fff !important;
      font-family: 'Jura', sans-serif;
      text-decoration: none;
      text-transform: uppercase;
      font-size:15px;
      
    }
    .navbar-inverse li a:hover
    {
      border-bottom: 2px solid #812044;
    }
    @media only screen and (max-width: 320px) 
    {
       .navbar-toggle
        {
          position: relative;
          float: right;
          padding: 9px 10px;
          margin-top: 8px;
         margin-right:20px;
         margin-bottom: 8px;
         background-color: transparent;
         background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        }
    }
  </style>
  
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top example6" style="background-color: transparent;border:none;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand animated slideInDown" href="#" onclick="window.open('https://www.nitt.edu/')"></a>
      </div>
      <div id="navbar6" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right animated slideInDown" style="padding: 15px;">
          <li><a href="index.php">Home</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<section id="contact">
  
  <h3 class="section-header" style="background: linear-gradient(to right, #000000 0%, #53346D 51%, #000000 100%);font-family: 'Jura', sans-serif;font-weight: bold;padding: 2px;">CONTACT</h3>
  
  <div class="contact-wrapper">
    
    <form class="form-horizontal" role="form" method="post" action="contact.php">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+91-8937876968</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">osocnitt@gmail.com</a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon" onclick="window.open('https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fosocnitt.wordpress.com%252Fcontact%252F%26t%3DContact&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=en_GB')">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon" onclick="window.open('https://osocnitt.wordpress.com/')">
            <i class="fa fa-wordpress" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>

        <div class="copyright" style="color: #fff;">&copy;Copyright 2021 OSOC NIT Trichy</div>

      </div>
    
  </div>
  
</section>  
  
  


</div>
  <script type="text/javascript">
     $(window).scroll(function() {
    if($(this).scrollTop() > 50) 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
  });

  </script>
</body>

</html>