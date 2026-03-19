<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Produto | ViralSmart</title>

<link rel="stylesheet" href="Produto.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<!-- HEADER -->

<header>

<div class="nav container">

<a href="index.php" class="logo">Viral <span>Smart</span></a>

<ul class="navbar">
<li><a href="index.php">Inicio</a></li>
<li><a href="#">Sobre</a></li>
<li><a href="Catalogo.php">Catalogo</a></li>
<li><a href="#">Contato</a></li>
</ul>

<div class="nav-icons">

<a href="carrinho.php">
<i class='bx bx-cart'></i>
</a>

<span id="contador">0</span>

</div>

</div>

</header>

<!-- PRODUTO -->

<section class="produto container">

<div class="flex-box">

<!-- IMAGENS -->

<div class="left">

<div class="big-img">
<img id="imagem-principal" src="" alt="Imagem do produto">
</div>

<div id="lista-imagens" class="images"></div>

</div>

<!-- INFO PRODUTO -->

<div class="right">

<h1 id="nome-produto"></h1>

<p id="descricao-produto"></p>

<div class="ratings">
<i class='bx bxs-star'></i>
<i class='bx bxs-star'></i>
<i class='bx bxs-star'></i>
<i class='bx bxs-star'></i>
<i class='bx bxs-star-half'></i>
</div>

<h2 id="preco-produto"></h2>

<div class="quantity">
<p>Quantidade:</p>
<input type="number" id="quantidade" value="1" min="1">
</div>

<div class="btn-box">

<button class="cart-btn" id="add-carrinho">
<i class='bx bx-cart'></i>
Adicionar ao Carrinho
</button>

<button class="buy-btn">
Comprar Agora
</button>

</div>

</div>

</div>

</section>

<!-- PRODUTOS RELACIONADOS -->

<section class="relacionados container">

<h2 class="titulo-relacionados">Produtos Relacionados</h2>

<div class="grid-relacionados">

<div class="produto-card">

<img src="https://via.placeholder.com/300" alt="Relógio Smart">

<h3>Relógio Smart</h3>

<p class="preco">R$ 199,90</p>

<a href="produto.php?id=1" class="btn-ver">
Ver Produto
</a>

</div>

<div class="produto-card">

<img src="https://via.placeholder.com/300/444" alt="Fone Bluetooth">

<h3>Fone Bluetooth</h3>

<p class="preco">R$ 149,90</p>

<a href="produto.php?id=2" class="btn-ver">
Ver Produto
</a>

</div>

<div class="produto-card">

<img src="https://via.placeholder.com/300/777" alt="Luminária LED">

<h3>Luminária LED</h3>

<p class="preco">R$ 89,90</p>

<a href="produto.php?id=3" class="btn-ver">
Ver Produto
</a>

</div>

<div class="produto-card">

<img src="https://via.placeholder.com/300/999" alt="Caixa Bluetooth">

<h3>Caixa Bluetooth</h3>

<p class="preco">R$ 129,90</p>

<a href="produto.php?id=4" class="btn-ver">
Ver Produto
</a>

</div>

</div>

</section>

<script src="Produto.js"></script>

</body>
</html>