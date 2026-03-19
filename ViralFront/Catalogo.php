
<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Catálogo | ViralSmart</title>

<link rel="stylesheet" href="catalogo.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

<!-- HEADER -->

<header>

<div class="nav container">

<i class='bx bx-menu' id="menu-icone"></i>

<a href="index.php" class="logo">Viral <span>Smart</span></a>

<ul class="navbar">
<li><a href="index.php">Inicio</a></li>
<li><a href="#sobre">Sobre</a></li>
<li><a href="catalogo.php">Catálogo</a></li>
<li><a href="#contato">Contato</a></li>
</ul>

<div class="nav-icons">

<a href="carrinho.php">
<i class='bx bx-cart'></i>
<span id="contador">0</span>
</a>

<i class='bx bx-search' id="icone-pesquisa"></i>

</div>

<div class="caixa-pesquisa container">
<input type="search" id="buscar" placeholder="Buscar produto...">
</div>

</div>

</header>

<!-- CATÁLOGO -->
<h1>Catálogo de Produtos</h1>

<input type="text" id="buscar" placeholder="Buscar produto...">

<div id="grid-produtos"></div>

<script src="catalogo.js"></script>

</body>

</html>

