<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LapShop</title>
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
  <script src="index.js" defer></script>
</head>
<body>
<?php include("../commenParts/header.php") ?>

<section class="hero">

<div class="part01">
    
<div class="container">
        <div class="slideshow-container">
        <div class="slide-container">


        <div class="slide1" >
          <img src="../pics/img slide 1 homepage.png" alt="">
        </div>
        <div class="slide1" >
          <img src="../pics/img slide 1 homepage.png" alt="">
        </div>
        <div class="slide1">
          <img src="../pics/img slide 1 homepage.png" alt="">
        </div>


        </div>
          </div>

          <div class="arrows">
          <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
          </div>
      </div>

</div>

<div class="part02">
  <h1>Lorem ipsum dolor sit amet</h1>
<p>Illo, nisi architecto. Veritatis, sint maiores veniam nulla repudiandae doloribus neque reiciendis hic dolor praesentium, </p>
<div class="part02Btns">
<button class="button1" style="background: black; color: white;">Add To cart</button>
<button class="button1" style="background: #378ce7; color: white;">Shop Now</button></div> 
</div>



</section>
<section class="g">
<div class="guarantee">
  <img src="../pics/Gimg.png" width="300px" height="auto" alt="">
  <div class="Gtxt">
    <h2>Achetez en toute confiance !</h2>
    <p>Nous voulons que vous soyez entièrement satisfait de votre achat sur Wish. Renvoyez tous les produits dans les 30 jours suivant la livraison s’ils ne vous satisfont pas.</p>
  </div>
</div>
</section>


<section class="moreP">
  <div class="mHeaders">
    
      <p>Produits connexes</p>
    
    
    <a href="../productsPage/products.php">
      <p>plus</p>
    </a>

  </div>
  <div class="mProducts">

  <?php
          $db = mysqli_connect('localhost', 'root', '', 'lapshop');
          $sql = "SELECT * FROM products WHERE popularProduct = 1 LIMIT 5";
          $result = mysqli_query($db, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
              // Determine background color based on availability
              $backgroundColor = $row['Available'] ? '#00ff15' : '#878787';
              
              echo '
                      <div class="slide2">
                      <div class="cart ">
                          <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>
                          <div class="bsImg">
                              <img src="data:image;base64,'.base64_encode($row['ProductImg']).'" alt="' . $row['Name'] . '">
                          </div>
                          <div class="bsTitle"><p>' . $row['Name'] . '</p></div>
                          <div class="Price" style="text-align:center; "> <p>'.$row['Price'].' DH </p> </div>

                          <div class="bsProperties">

                              <div class="prop"><p>'.$row['Specification'].'</p></div>
                              
                          </div>

                          <div class="bsButtons">
                              <button type="button" id="btn01">Add To Cart</button>
                              <button type="button" id="btn02">Shop Now</button>
                          </div>
                      </div>
                      </div>



                      <div class="slide2">
                      <div class="cart ">
                          <div class="bsDot" style="background-color: ' . $backgroundColor . ';"></div>
                          <div class="bsImg">
                              <img src="data:image;base64,'.base64_encode($row['ProductImg']).'" alt="' . $row['Name'] . '">
                          </div>
                          <div class="bsTitle"><p>' . $row['Name'] . '</p></div>
                          <div class="Price" style="text-align:center; "> <p>'.$row['Price'].' DH </p> </div>

                          <div class="bsProperties">

                              <div class="prop"><p>'.$row['Specification'].'</p></div>
                              
                          </div>

                          <div class="bsButtons">
                              <button type="button" id="btn01">Add To Cart</button>
                              <button type="button" id="btn02">Shop Now</button>
                          </div>
                      </div>
                      </div>
                     
                  ';
          }
          ?>


         
         

  </div>


</section>


  <?php include("../commenParts/QA-Part.php") ?>


  <?php include("../commenParts/footer.php") ?>

    
</body>
</html>



<script>

      let slideIndex = 0;
              
                function showSlides() {
                  const slides1 = document.querySelectorAll('.slide1');
                  if (slideIndex >= slides1.length) {
                    slideIndex = 0;
                  } else if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                  }
                  const offset = -slideIndex * 105;
                  document.querySelector('.slide-container').style.transform = `translateX(${offset}%)`;
                }
              
                function moveSlide(n) {
                  slideIndex += n;
                  showSlides();
                }
              
                showSlides();


      
</script>

