<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ViralSmart | Produtos Inteligentes</title>

<link rel="stylesheet" href="style.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

</head>

<body>

<header>

<div class="nav container">

<i class='bx bx-menu' id="menu-icone"></i>

<a href="index.php" class="logo">Viral <span>Smart</span></a>

<ul class="navbar">
<li><a href="index.php">Inicio</a></li>
<li><a href="#sobre">Sobre</a></li>
<li><a href="Catalogo.php">Catalogo</a></li>
<li><a href="#contato">Contato</a></li>
</ul>

<i class='bx bx-cart' onclick="abrirCarrinho()"><span id="contador">0</span></i>




<i class='bx bx-search' id="icone-pesquisa"></i>

<div class="caixa-pesquisa container">
<input type="search" placeholder="Procure Aqui...">
</div>

</div>

</header>

<!-- SWIPER -->
 

<div class="swiper mySwiper">


<div class="swiper-wrapper">

<div class="swiper-slide">
<img src="img/15OFF.png">
</div>

<div class="swiper-slide">
<img src="img/">
</div>

<div class="swiper-slide">
<img src="img/fone.jpg">
</div>

</div>

<div class="swiper-pagination"></div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>

<!-- SOBRE -->

<section class="sobre container" id="sobre">

<img src="img/projetor.jpg">

<div class="texto-sobre">

<span>Sobre Nós</span>

<h2>Fazendo a Tecnologia Acontecer</h2>

<p>Produtos tecnológicos inteligentes para facilitar sua vida.</p>

<a href="#" class="btn">Ler Mais</a>

</div>

</section>

<!-- CATALOGO -->

<section id="catalogo" class="catalogo">

<div class="container">

<h2 class="titulo-secao">Produtos Populares</h2>

<div class="categorias">

<button onclick="filtrar('todos')" class="categoria active">Todos</button>
<button onclick="filtrar('casa')" class="categoria">Casa Smart</button>
<button onclick="filtrar('audio')" class="categoria">Áudio</button>
<button onclick="filtrar('carregador')" class="categoria">Carregadores</button>
<button onclick="filtrar('gadget')" class="categoria">Gadgets</button>

</div>

<div class="produtos">

<div class="produto" data-categoria="gadget">

<img src="img/projetor.jpg">

<h3>Mini Projetor Smart</h3>

<p>Transforme qualquer parede em cinema.</p>

<span class="preco">R$ 199.90</span>

<button onclick="addCarrinho('Mini Projetor Smart',199.90)">
<i class='bx bxs-cart-add'></i>Adicionar
</button>

</div>

<div class="produto" data-categoria="casa">

<img src="img/lampada.jpg">

<h3>Lâmpada Smart RGB</h3>

<p>Controle via app ou assistente de voz.</p>

<span class="preco">R$ 79.90</span>

<button onclick="addCarrinho('Lampada Smart RGB',79.90)">
<i class='bx bxs-cart-add'></i>Adicionar
</button>

</div>

<div class="produto" data-categoria="audio">

<img src="img/fone.jpg">

<h3>Fone Bluetooth Pro</h3>

<p>Som imersivo e bateria de longa duração.</p>

<span class="preco">R$ 159.90</span>

<button onclick="addCarrinho('Fone Bluetooth',159.90)">
<i class='bx bxs-cart-add'></i>Adicionar
</button>

</div>

</div>

</div>

</section>

<!-- CARRINHO -->

<div id="cart">

<h2>Carrinho</h2>

<div id="cart-items"></div>

<h3>Total: <span id="total">R$ 0.00</span></h3>

<button onclick="fecharCarrinho()">Fechar</button>

</div>

<footer class="footer">

<div class="footer-container">

<div class="footer-col">

<h3>ViralSmart</h3>

<p>
Tecnologia inteligente e produtos virais para facilitar sua vida.
</p>

</div>

<div class="footer-col">


</div>

<div class="footer-col">

<h4>Suporte</h4>

<ul>
<li><a href="#">Ajuda</a></li>
<li><a href="#">Envio</a></li>
<li><a href="#">Trocas</a></li>
<li><a href="#">Privacidade</a></li>
</ul>

</div>

<div class="footer-col">

<h4>Redes</h4>

<div class="social">

<a href="#"><i class='bx bxl-instagram'></i></a>
<a href="#"><i class='bx bxl-facebook'></i></a>
<a href="#"><i class='bx bxl-tiktok'></i></a>
<a href="#"><i class='bx bxl-youtube'></i></a>

</div>

</div>

</div>

<div class="footer-bottom">

<p>© 2026 ViralSmart • Todos os direitos reservados</p>

</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>