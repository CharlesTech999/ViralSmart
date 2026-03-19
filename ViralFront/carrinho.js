let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

const lista = document.getElementById("lista-carrinho");
const totalElemento = document.getElementById("total");
const contador = document.getElementById("contador");

function atualizarContador(){

const total = carrinho.reduce((acc,item)=>acc+item.quantidade,0);

contador.textContent = total;

}

function renderCarrinho(){

lista.innerHTML = "";

let total = 0;

carrinho.forEach((produto,index)=>{

const div = document.createElement("div");
div.className = "item-carrinho";

div.innerHTML = `

<img src="${produto.imagem}" class="img-produto">

<div class="info">

<h3>${produto.nome}</h3>

<p class="preco">R$ ${produto.preco.toFixed(2)}</p>

<div class="controle">

<input type="number" min="1" value="${produto.quantidade}" data-index="${index}" class="quantidade">

<button class="remover" data-index="${index}">
<i class='bx bx-trash'></i>
</button>

</div>

</div>

<div class="subtotal">

R$ ${(produto.preco * produto.quantidade).toFixed(2)}

</div>

`;

lista.appendChild(div);

total += produto.preco * produto.quantidade;

});

totalElemento.textContent = "Total: R$ " + total.toFixed(2);

salvarEventos();
atualizarContador();

}

function salvarEventos(){

document.querySelectorAll(".quantidade").forEach(input=>{

input.addEventListener("change",e=>{

const index = e.target.dataset.index;

carrinho[index].quantidade = Number(e.target.value);

salvarCarrinho();

});

});

document.querySelectorAll(".remover").forEach(botao=>{

botao.addEventListener("click",e=>{

const index = e.currentTarget.dataset.index;

carrinho.splice(index,1);

salvarCarrinho();

});

});

}

function salvarCarrinho(){

localStorage.setItem("carrinho",JSON.stringify(carrinho));

renderCarrinho();

}

renderCarrinho();