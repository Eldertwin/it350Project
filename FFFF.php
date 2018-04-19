<!DOCTYPE html>
<html>
<title>Fancy Fony Foam Fighters</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
    background-image: url("pic.jpg");
}
</style> 
<body>

<?php
   include("config.php");		
   session_start();
?>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
    <a href="FFFF.php" class="w3-bar-item w3-button"><i><b>Fancy Fony Foam Fighters</b></i></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
    <input type="text" placeholder="Search...">
      
	<a href="viewCart.php" class="w3-bar-item w3-button">Cart<img src="https://favicon-generator.org/favicon-generator/htdocs/favicons/2014-11-26/ba9715c8c96fcd39f1234f1c834cbe38.ico"></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <div class="w3-display-middle w3-margin-top w3-center">

  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h2 class="w3-border-bottom w3-border-light-grey w3-padding-16">Make Your Selection</h2>
  </div>

  <div class="w3-row-padding">
   <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Sword</div>
        <img src="data:image/jpeg;base64,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" alt="Sword" style="width:100%">
    <form action="addSwordToMongo.php" method="post">
    </br>
    <input type="Submit">
    </form>
  <p> 
    
  </p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Shield</div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtG1uBchrADOLwSQ_SAuoIStk4rY6WiHV-dv-dyfGiAceYeAUMMQ" alt="Shield" style="width:100%">
    <form action="addShieldToMongo.php" method="post">
    </br>
    <input type="Submit">
    </form>
      </div>
    </div>
    <div>

      <div class="w3-row-padding">
   <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Spear</div>
        <img src="data:image/png;base64,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" alt="Spear" style="width:100%">
    <form action="addSpearToMongo.php" method="post">
    </br>
    <input type="Submit">
    </form>
  <p> 
    
  </p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Axe</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Kitchen_hatchet_head_view.jpeg/1024px-Kitchen_hatchet_head_view.jpeg" alt="Axe" style="width:100%">
    <form action="addAxeToMongo.php" method="post">
    </br>
    <input type="Submit">
    </form>
      </div>
    </div>
    <div>

      <div class="w3-row-padding">
   <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Dagger</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Fs-dagger.jpg" alt="Dagger" style="width:100%">
    <form action="addDaggerTo.php" method="post">
    </br>
    <input type="Submit">
    </form>
  <p> 
    
  </p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">One of Each</div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Middle_ages_weapons_basement.jpg" alt="All" style="width:100%">
    <form action="addAllToMongo.php" method="post">
    </br>
    <input type="Submit">
    </form>
      </div>
    </div>
    <div>


    </div>