<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>

<link rel="stylesheet" href="checkout.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

<i class='bx bx-search' id="icone-pesquisa"></i>

<div class="caixa-pesquisa container">
<input type="search" placeholder="Procure Aqui...">
</div>

</div>

</header>

<br><br><br><br><br><br>

<div class="checkout-container">

<h1>Finalizar Compra</h1>

<div class="checkout-grid">

<div class="resumo">

<h2>Seu Pedido</h2>

<div id="produtos"></div>

<h3 id="total">Total: R$ 0</h3>

</div>


<div class="pagamento">

<h2>Pagamento</h2>

<div class="metodos">

<button onclick="mostrarMetodo('cartao')" class="ativo">Cartão</button>
<button onclick="mostrarMetodo('pix')">Pix</button>

</div>

<div id="cartao" class="metodo ativo">

<input placeholder="Nome no cartão">
<input placeholder="Número do cartão">
<input placeholder="MM/AA">
<input placeholder="CVV">

<button class="btn-pagar" onclick="pagarCartao()">Pagar</button>

</div>

<div id="pix" class="metodo">

<p>Escaneie o QR Code</p>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=pix-demo">

<p class="pix-chave">pix@empresa.com</p>

<button class="btn-pagar" onclick="pagarPix()">Confirmar pagamento</button>

</div>

</div>

</div>

</div>

<div id="popupPagamento" class="popup">

<div class="popup-conteudo">

<h2>✅ Pagamento realizado!</h2>

<p>Seu pedido foi confirmado com sucesso.</p>

<button onclick="voltarInicio()">Voltar ao início</button>

</div>

</div>
<script src="checkout.js"></script>

</body>
</html>