<?php
include("connect.php");

$query = "SELECT name, shortDescription FROM islandsofpersonality WHERE status = 'Active'";
$result = executeQuery($query);
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>JSG Island Personalities</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: myFont;
      src: url(Carton_Six.ttf);
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'myFont';
    }

    .w3-row-padding img {
      margin-bottom: 12px
    }

    .bgimg {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url('images/header.png');
      min-height: 100%;
    }
  </style>
</head>

<body>

 
  <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
    <div class="bgimg"></div>
  </nav>

  
  <nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge"
    style="display: none; padding-top: 150px; right: 0px; z-index: 2; width: 60%;" id="mySidebar">
    <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright"
      style="padding:0 12px;">
      <i class="fa fa-remove"></i>
    </a>
    <div class="w3-bar-block w3-center">
      <a href="https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm#"
        class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
      <a href="https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm#portfolio"
        class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Portfolio</a>
      <a href="https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm#about"
        class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
      <a href="https://www.w3schools.com/w3css/tryw3css_templates_bw_portfolio.htm#contact"
        class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
    </div>
  </nav>

  <div class="w3-main w3-padding-large" style="margin-left:40%">

   
    <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;"
      onclick="openNav()"><i class="fa fa-bars"></i></span>
 
    <header class="w3-container w3-center" style="padding:50px 16px" id="home">
      <h1 class="w3-jumbo"><b>John Stephen's Headquarters</b></h1>
      <p>That flamboyant yet timid guy.</p>
      <img src="images/header.png" class="w3-image w3-hide-large w3-hide-small w3-round"
        style="display:block;width:60%;margin:auto;">
      <img src="images/header.png" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">

    </header>

  
    <div class="w3-padding-32 w3-content" id="portfolio">
      <h2 class="w3-center w3-text-black">Stephen's Islands of Personalities</h2>
      <hr class="w3-opacity">

    
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <?php
          $count = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $shortDescription = $row['shortDescription'];

            if ($count % 2 == 0 && $count > 0)
              echo '</div><div class="w3-half">';

            echo '
              <div class="w3-container">
        <a href="' . strtolower(str_replace(' ', '', $name)) . '.php">
        <img src="images/' . strtolower(str_replace(' ', '', $name)) . '.png" style="width:100%">
        <p class="w3-center w3-text-black">' . $name . '<br>' . $shortDescription . '</p>
      </a>
    </div>';

            $count++;
          }
          ?>

        </div>

      </div>

    </div>

    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
      <h2>About Me!</h2>
      <hr class="w3-opacity">
      <p>Hi! I'm Stephen, I'm the kind of guy who likes to have fun and knows what he wants. I'm the kind of guy who
        also likes technology—whether it's building cool gadgets, experimenting with AI, or simply keeping up with the
        latest innovations, I love exploring how tech can make life better and more exciting.

        When I'm not geeking out over the latest tech trends, you'll find me streaming games on TikTok, where I share my
        gaming adventures with an awesome community. Shoutout to all my amazing followers—thank you for helping me hit
        almost 5,000 followers!

        I'm also passionate about creating solutions that make a difference. In fact, my current capstone project is an
        AI Chatbot designed to assist university students with inquiries. It’s my way of combining my love for tech and
        my desire to help others. Whether it’s playing games, diving into tech projects, or just having a good laugh, I believe life is about
        learning, sharing, and connecting with people who inspire you. Let’s make it awesome together!


      </p>

      
    </div>

  

    </div>

  
      
    </footer>

     </div>

  <script>

    function openNav() {
      document.getElementById("mySidebar").style.width = "60%";
      document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.display = "none";
    }
  </script>


</body>

</html>