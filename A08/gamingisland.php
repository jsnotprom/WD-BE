<?php
include("connect.php");

$query = "SELECT * FROM `islandsofpersonality` JOIN islandcontents ON islandsofpersonality.islandOfPersonalityID = 
islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = 3;";
$result = executeQuery($query);


while ($row = mysqli_fetch_assoc($result)) {
  $name = $row['name'];
  $shortDescription = $row['shortDescription'];
  $longDescription = $row['longDescription'];
  

}

$content1 = "SELECT content FROM `islandcontents` WHERE islandContentID = 11";
$result1 = executeQuery($content1);
while ($row = mysqli_fetch_assoc($result1)) {
  $contentdesc1 = $row['content'];
}

$content2 = "SELECT content FROM `islandcontents` WHERE islandContentID = 12";
$result2 = executeQuery($content2);
while ($row = mysqli_fetch_assoc($result2)) {
  $contentdesc2 = $row['content'];
}

$content3 = "SELECT content FROM `islandcontents` WHERE islandContentID = 13";
$result3 = executeQuery($content3);
while ($row = mysqli_fetch_assoc($result3)) {
  $contentdesc3 = $row['content'];
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>JSG's Gaming Island</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
     @font-face{
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
      background-size: contain;
      background-image: url('images/gamingisland.png');
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

  
    <header class="w3-container w3-center" style="padding:20px 16px" id="home">
      <h1 class="w3-jumbo"><b><?php echo $name; ?></b></h1>
      <p><?php echo $shortDescription; ?></p>
      <img src="images/familyisland.png" class="w3-image w3-hide-large w3-hide-small w3-round"
        style="display:block;width:60%;margin:auto;">
      <img src="images/familyisland.png" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">

    </header>


    <div class="w3-padding-32 w3-content" id="portfolio">
      <h2 class="w3-center w3-text-black">Core Memories of this Island</h2>
      <hr class="w3-opacity">

      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
        
          <div class="w3-container">
            <img src="images/gamingislandcore3.png" style="width:100%">
            <p class="w3-center w3-text-black"> 
            <br> <?php echo $contentdesc1; ?>
            </p>
          </div>
          <div class="w3-container">
            <img src="images/gamingislandcore2.png" style="width:100%">
            <p class="w3-center w3-text-black">
            <br> <?php echo $contentdesc2; ?>
            </p>
          </div>

        </div>

        <div class="w3-half">
          <div class="w3-container">
            <img src="images/gamingislandcore1.png" style="width:100%">
            <p class="w3-center w3-text-black">
            <br> <?php echo $contentdesc3; ?>
            </p>
          </div>
         
       
      </div>
 
    </div>


    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
      <h2>About <?php echo $name?></h2>
      <hr class="w3-opacity">
      <p> <?php echo $longDescription; ?>
      </p>

    </div>

  
    


    </div>

  
  
 


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