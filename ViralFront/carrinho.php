<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carrinho.css">
</head>
<body>
<header>

<div class="nav container">

<i class='bx bx-menu' id="menu-icone"></i>

<a href="index.html" class="logo">Viral <span>Smart</span></a>

<ul class="navbar">
<li><a href="index.php">Inicio</a></li>
<li><a href="#sobre">Sobre</a></li>
<li><a href="catalogo.php">Catalogo</a></li>
<li><a href="#contato">Contato</a></li>
</ul>

<div class="nav-icons">
<a href="carrinho.php">
<i class='bx bx-cart'></i>
</a>
<span id="contador">0</span>
</div>




<i class='bx bx-search' id="icone-pesquisa"></i>

<div class="caixa-pesquisa container">
<input type="search" placeholder="Procure Aqui...">
</div>

</div>

</header>
<br><br><br><br><br><br><br><br><br><br>

<h1 class="titulo">Seu Carrinho</h1>

<div id="lista-carrinho" class="carrinho-container"></div>

<div class="resumo">

<h2 id="total">Total: R$ 0</h2>

<a href="Checkout.php" class="checkout">Finalizar Compra </a>




<script src="carrinho.js"></script>
</body>
</html>