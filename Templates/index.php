<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!--Custom css file link-->
  <link rel="stylesheet" href="../assets/css/styles.css">

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

  <?php include_once ("nav.php"); ?> <!-- NavBar php -->

  <!--slider section start-->
  <div class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper wrapper">
        <div class=" swiper-slide slide slide1">
          <div class="content">
            <img src="../assets/img/crown-symbol.png" alt="">

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
            <img src="../assets/img/crown-symbol.png" alt="">

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
            <img src="../assets/img/crown-symbol.png" alt="">

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

  <?php include_once ("welcome.php"); ?> <!-- Welcome php -->

  <?php include_once ("menu.php"); ?> <!-- Menu php -->

  <?php include_once ("team.php"); ?> <!-- Team php -->

  <?php include_once ("Reservation.php"); ?> <!-- Team php -->

  <?php include_once ("news.php"); ?> <!-- News php -->










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