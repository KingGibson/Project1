<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!--Custom css file link-->
  <link rel="stylesheet" href="./assets/css/styles.css">

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
  <? include_once "Nav.php"; ?> <!-- NavBar -->

  <!--slider section start-->
  <div class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper wrapper">
        <div class=" swiper-slide slide slide1">
          <div class="content">
            <img src="img/crown-symbol.png" alt="">

            <h3>delicious royate</h3>
            <h1>gift voucher</h1>
            <p>
              give away your beloved customers 
            </p>
            <a href="#" class="btn">order now</a>
          </div>
        </div>

        <div class="swiper-slide slide slide2">
          <div class="content">
            <img src="img/crown-symbol.png" alt="">

            <h3>sale of 10% this dish</h3>
            <h1>the fresh</h1>
            <p>
              food restaurant
            </p>
            <a href="#" class="btn">order now</a>
          </div>
        </div>
        <div class=" swiper-slide slide slide3">
          <div class="content">
            <img src="img/crown-symbol.png" alt="">

            <h3>we are open</h3>
            <h1>fresh fruits</h1>
            <p>
              you will live it
            </p>
            <a href="#" class="btn">order now</a>
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--slider section End-->

<section class="welcome" id="About">
  <h1 class="heading">WELCOME TO ROYATE</h1>
  <center><h3 class="sub-heading"> ~ Luxury & Quality ~ </h3></center>

  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="https://localhost/project1/img/post-thumb-1.jpg" alt="">
      </div>

      <div class="content">
        <h3>PROFESSIONAL LEVEL</h3>
        <P>nor again is there anyone who loes or pursues or desires to
          obtain pain of itselt, because it is pain, but because occasionally
          circumstances occur.</P>

          <a href="#" class="btn">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="https://localhost/project1/img/post-thumb-2.jpg" alt="">
      </div>

      <div class="content">
        <h3>FRESH FOOD GUARANTEED</h3>
        <P>nor again is there anyone who loes or pursues or desires to
          obtain pain of itselt, because it is pain, but because occasionally
          circumstances occur.</P>

          <a href="#" class="btn">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="https://localhost/project1/img/post-thumb-3.jpg" alt="">
      </div>

      <div class="content">
        <h3>THE MENU IS PLENTIFUL</h3>
        <P>nor again is there anyone who loes or pursues or desires to
          obtain pain of itselt, because it is pain, but because occasionally
          circumstances occur.</P>

          <a href="#" class="btn">Read More</a>
      </div>
    </div>

  </div>
</section>

<!--Welcome section Start-->

<!--Our menu section start-->
<section class="our-menu" id="menu">
  <h1 class="heading">our food menu</h1>
  <center><h3 class="sub-heading"> ~ see what we offer ~ </h3></center>

  <div class="menu-container">

    <div class="item">
      <div class="item-name">
        <h2>Main Course</h2>
        <img src="https://localhost/project1/img/drinks.png" alt="">
         </div><!--item-name div ends-->



         <div class="item-body">
            <div class="item-menu">
              <h3>Super-Delicious Zuppa Toscana</h3>
              <span class="dots"></span>
              <h3>$40</h3>

              <ul>
                <li><a href="#">Chicken</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">Sausages</a></li>
                <li><a href="#">Spinach</a></li>
              </ul>
           </div><!--item-menu div ends-->


           <div class="item-menu">
            <h3>Super-Delicious Zuppa Toscana</h3>
            <span class="dots"></span>
            <h3>$26</h3>

            <ul>
              <li><a href="#">Mushrooms</a></li>
              <li><a href="#">Italian</a></li>
              <li><a href="#">Sausages</a></li>
              <li><a href="#">Spinach</a></li>
            </ul>
         </div><!--item-menu div ends-->


             </div><!--item-body div ends-->
                  </div><!--Items div ends-->


                  <div class="item">
                    <div class="item-name">
                      <h2>Soups & salads</h2>
                      <img src="https://localhost/project1/img/drinks.png" alt="">
                       </div><!--item-name div ends-->
              
              
              
                       <div class="item-body">
                          <div class="item-menu">
                            <h3>Super-Delicious Zuppa Toscana</h3>
                            <span class="dots"></span>
                            <h3>$40</h3>
              
                            <ul>
                              <li><a href="#">Chicken</a></li>
                              <li><a href="#">Italian</a></li>
                              <li><a href="#">Sausages</a></li>
                              <li><a href="#">Spinach</a></li>
                            </ul>
                         </div><!--item-menu div ends-->
              
              
                         <div class="item-menu">
                          <h3>Super-Delicious Zuppa Toscana</h3>
                          <span class="dots"></span>
                          <h3>$26</h3>
              
                          <ul>
                            <li><a href="#">Mushrooms</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Sausages</a></li>
                            <li><a href="#">Spinach</a></li>
                          </ul>
                       </div><!--item-menu div ends-->
              
              
                            </div><!--item-body div ends-->
                                </div><!--Items div ends-->
              



                                    <div class="item">
                                      <div class="item-name">
                                        <h2>Drinks</h2>
                                    <img src="https://localhost/project1/img/drinks.png" alt="">
                                     </div><!--item-name div ends-->
                            
                            
                            
                                     <div class="item-body">
                                        <div class="item-menu">
                                          <h3>Super-Delicious Zuppa Toscana</h3>
                                          <span class="dots"></span>
                                          <h3>$40</h3>
                            
                                          <ul>
                                            <li><a href="#">Chicken</a></li>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Sausages</a></li>
                                            <li><a href="#">Spinach</a></li>
                                          </ul>
                                       </div><!--item-menu div ends-->
                            
                            
                                       <div class="item-menu">
                                        <h3>Super-Delicious Zuppa Toscana</h3>
                                        <span class="dots"></span>
                                        <h3>$26</h3>
                            
                                        <ul>
                                          <li><a href="#">Mushrooms</a></li>
                                          <li><a href="#">Italian</a></li>
                                          <li><a href="#">Sausages</a></li>
                                          <li><a href="#">Spinach</a></li>
                                        </ul>
                                     </div><!--item-menu div ends-->
                            
                            
                                          </div><!--item-body div ends-->
                                              </div><!--Items div ends-->
                            



                                              <div class="item">
                                                <div class="item-name">
                                                  <h2>Desserts</h2>
                                                  <img src="https://localhost/project1/img/drinks.png" alt="">
                                                   </div><!--item-name div ends-->
                                          
                                          
                                          
                                                   <div class="item-body">
                                                      <div class="item-menu">
                                                        <h3>Super-Delicious Zuppa Toscana</h3>
                                                        <span class="dots"></span>
                                                        <h3>$40</h3>
                                          
                                                        <ul>
                                                          <li><a href="#">Chicken</a></li>
                                                          <li><a href="#">Italian</a></li>
                                                          <li><a href="#">Sausages</a></li>
                                                          <li><a href="#">Spinach</a></li>
                                                        </ul>
                                                     </div><!--item-menu div ends-->
                                          
                                          
                                                     <div class="item-menu">
                                                      <h3>Super-Delicious Zuppa Toscana</h3>
                                                      <span class="dots"></span>
                                                      <h3>$26</h3>
                                          
                                                      <ul>
                                                        <li><a href="#">Mushrooms</a></li>
                                                        <li><a href="#">Italian</a></li>
                                                        <li><a href="#">Sausages</a></li>
                                                        <li><a href="#">Spinach</a></li>
                                                      </ul>
                                                   </div><!--item-menu div ends-->
                                          
                                          
                                                        </div><!--item-body div ends-->
                                                            </div><!--Items div ends-->
                                          

                 







  </div><!--Menu container div ends-->
</section>
<!--Our menu section ends-->



<!--our team section start-->

<!--our team section ends-->










<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 7500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });
</script>



<script type="text/javascript">
  let menu = document.querySelector('#Menu');
  let navbar = document.querySelector('.navbar');

  menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
  }

</script>
</body>
</html>