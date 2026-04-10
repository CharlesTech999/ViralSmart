<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial | ViralSmart</title>
    <link rel="stylesheet" href="inicial.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>

</head>
<body>

<?php
    include "../includes/header.php";
?>

<!-- Estrutura do Swiper -->
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide slide1">Slide 1</div>
    <div class="swiper-slide slide2">Slide 2</div>
    <div class="swiper-slide slide3">Slide 3</div>
  </div>

  <!-- Paginação -->
  <div class="swiper-pagination"></div>

  <!-- Botões -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>


<?php 
    include "../includes/footer.php";
?>

<!-- JS do Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.swiper', {
    loop: true,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

    
    <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</body>
</html>
