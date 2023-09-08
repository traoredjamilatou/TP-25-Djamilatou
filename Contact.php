<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"
  />
  <script
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
  ></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2? family*Rubik:wght@400;500;600;700;etdisplay*swap" rel="stylesheet">
    <!-- box icons link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- remix icons link -->
    <link href="http://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="Servvices.css"> -->
    <title>Document</title>
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <section class="hero-section">
        <header>
        <?php include("menu.php") ?>   
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Services.html">SERVICES</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="Contact.html">CONTACT</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
        </header>
    </section>

    <section class="innerpage bg-yellow">
    <div class="container">
    <div class="row">
    <div class="col-12 col-lg-11 ml-auto">
    <div class="inner-content text-white">
    <!-- <small>Contact</small> -->
    <h2 class="Libre-bold text-white mb-0">Contact</h2>
    </div>
</div>
</div>
</div>
</section>

<section class="A">
<div class="B">
  <!-- Contact -->
  <section class="contact" id="contact">
        <div class="center-text">
        <h2>Contact</h2>
        </div>
<div class="Contact-form">
<form action="">
<p>Civilite</p>
<!-- <input type="radio" placeholder="Male" required class=""> Mme
<input type="radio" placeholder="Female" required class=""> Mlle
<input type="radio" placeholder="Female" required class=""> M -->
<div class="C">
<input type="text" placeholder="Prenom" required>
<input type="email" placeholder="Nom" required>
</div>
<div class="D">
<input type="text" placeholder="Courriel" required>
<input type="email" placeholder="Telephone" required>
</div>
<input type="text" placeholder="Destinataire" required>
<input type="email" placeholder="Objet" required>
<div class="E">
<input type="text" placeholder="Adresse" required>
<input type="email" placeholder="Organisme" required>
</div>
<input type="email" placeholder="Pays" required>
<textarea name="" id="" cols="30" rows="10" placeholder="Message" required></textarea>
<input type="submit" name="" value="Envoyer" class="Send-btn">
</form>
</div>
  </section>
</div>
</section>

<?php include("footer.php") ?>

<!-- <section class="omni">
    <section class="footer">
      <div class="img-footer">
    <img src="download.png" alt="">
    <p>SUIVEZ-NOUS-SUR</p>
    <a href="#"><i class="ri-facebook-fill"></i></a>
    <a href="#"><i class="ri-instagram-fill"></i></a>
    <a href="#"><i class="ri-youtube-fill"></i></a>
    <i class="ri-github-fill"></i>
    </div>
    <div class="RA">
       <p>Organisation internationale de la Francophonie</p>
    <p>19-21 avenue Bosquet.75007 Paris(France)</p>
    <p>Telephone (33)1 44 37 33 25</p>
    <p>Telecopie (33) 1 45 79 14 98</p>
    </div>
    <div class="rachi">
      <p class="P">RECRUTEMENTS</p>
      <P>APPELS A</P>
      <P>CANDIDATURES</P>
      <P>MARCHES PUBLICS</P>
    </div> 
    <div class="icons">
      <p>CONTACTS</p>
      <P>MENTIONS LEGALES</P>
      <P>POLITIQUE DE CONFIDENTIALITE</P>
    </div>
</div>
    </section>
    </section> 
    <section class="L">
    <div class="l">Copyright © francophone 2023. All Rights Reserved</div>
    </section> -->
    

    <script src="index.js"></script>
    
</body>
</html>