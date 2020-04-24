<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="menu.css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>DC METRO REMODELING LLC.</title>
    <link rel="shortcut icon" type="image/png" href="Images/dcFavi.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(function() {
        $(".toggle").on("click", function() {
          if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
          } else {
            $(".item").addClass("active");
          }
        })
      });
    </script>    
  </head>
  <body>

    <!-- <header1 class="headerStyle">
      
      <a style="color: #337288; text-decoration: none;"href="tel:301-455-6258">Call us at: 301-455-6258</a>      

    </header1>-->
    <div class="slider">
      <div id="infoi">
         <h1 class="header">DC Metro Remodeling LLC. </h1> <br>
        We are here to help you create your dream home. 
      </div>
      
      <div class="sliderchild">
        <div class="imagecon">
          <!--slide 1-->
        </div>
        <div class="imagecon">     
        </div>
        <div class="imagecon">         
        </div>
        <div class="imagecon">          
        </div>
        <div class="imagecon">          
        </div>
      </div>
    </div>
    <nav>
      <ul class="menu">
        <!--imagen con clase logo and larger image class for style -->
        <li class="logo"><a href="index.php"><img class="larger-image" src="images/logo5.png" alt="Dc Metro Remodeling"></a></li>
        <li class="item"><a href="index.php">Home</a></li>
        <li class="item"><a href="projects.php">Projects</a></li>
        <li class="item"><a href="testimonials.php">Testimonials</a></li>
        <li class="item button" ><a href="contact.php">Request a quote </a></li>
        <li class="item button secondary"><a href="contact.php">Contact us</a></li>
        <li class="toggle"><span class="bars"></span></li>
      </ul>
    </nav>