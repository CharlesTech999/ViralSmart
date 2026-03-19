let pesquisa = document.querySelector('.caixa-pesquisa');
let menu = document.querySelector('.navbar');

document.querySelector('#icone-pesquisa').onclick = () => {
pesquisa.classList.toggle('active');
menu.classList.remove('active');
};

document.querySelector('#menu-icone').onclick = () => {
menu.classList.toggle('active');
pesquisa.classList.remove('active');
};

window.onscroll = ()=>{
menu.classList.remove('active');
pesquisa.classList.remove('active');
};

let carrinho = []
let total = 0

function addCarrinho(produto, preco){

carrinho.push({produto, preco})

total += preco

atualizarCarrinho()

}

function atualizarCarrinho(){

const lista = document.getElementById("cart-items")

lista.innerHTML=""

carrinho.forEach(item => {

lista.innerHTML += `<p>${item.produto} - R$ ${item.preco}</p>`

})

document.getElementById("total").innerText =
"R$ " + total.toFixed(2)

document.getElementById("contador").innerText =
carrinho.length

}

function abrirCarrinho(){

document.getElementById("cart").style.right="0"

}

function fecharCarrinho(){

document.getElementById("cart").style.right="-400px"

}

function filtrar(categoria){

let produtos = document.querySelectorAll(".produto")

produtos.forEach(produto=>{

if(categoria==="todos"){
produto.style.display="block"
}

else if(produto.dataset.categoria===categoria){
produto.style.display="block"
}

else{
produto.style.display="none"
}

})

}

var swiper = new Swiper(".mySwiper", {

loop:true,

autoplay:{
delay:3000
},

pagination:{
el:".swiper-pagination",
clickable:true
},

navigation:{
nextEl:".swiper-button-next",
prevEl:".swiper-button-prev"
}

});