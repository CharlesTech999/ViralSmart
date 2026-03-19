const params = new URLSearchParams(window.location.search);
const productId = params.get("id");

fetch("Produtos.json")
.then(res => res.json())
.then(produtos => {

const produto = produtos.find(p => p.id == productId);

if(!produto){

console.log("Produto não encontrado");
return;

}

// elementos da página
const nome = document.getElementById("nome-produto");
const descricao = document.getElementById("descricao-produto");
const precoElemento = document.getElementById("preco-produto");
const imagem = document.getElementById("imagem-principal");
const quantidadeInput = document.getElementById("quantidade");
const botaoCarrinho = document.getElementById("add-carrinho");

// preencher informações
nome.textContent = produto.nome;
descricao.textContent = produto.descricao;
imagem.src = produto.imagem;


// função atualizar preço
function atualizarPreco(){

const quantidade = Number(quantidadeInput.value);

const total = produto.preco * quantidade;

precoElemento.textContent = "R$ " + total.toFixed(2);

}

// preço inicial
atualizarPreco();

// atualizar quando mudar quantidade
quantidadeInput.addEventListener("input", atualizarPreco);


// adicionar ao carrinho
botaoCarrinho.addEventListener("click", () => {

const quantidade = Number(quantidadeInput.value);

let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

const produtoExistente = carrinho.find(p => p.id == produto.id);

if(produtoExistente){

produtoExistente.quantidade += quantidade;

}else{

carrinho.push({

id: produto.id,
nome: produto.nome,
preco: produto.preco,
imagem: produto.imagem,
quantidade: quantidade

});

}

localStorage.setItem("carrinho", JSON.stringify(carrinho));

atualizarContador();

alert("Produto adicionado ao carrinho!");

});

});




// contador do carrinho
function atualizarContador(){

const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

const total = carrinho.reduce((acc, item) => acc + item.quantidade, 0);

document.getElementById("contador").textContent = total;

}

atualizarContador();