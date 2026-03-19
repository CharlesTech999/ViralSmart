
let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

let container = document.getElementById("produtos");

let total = 0;

carrinho.forEach(produto => {

let item = document.createElement("div");

item.innerHTML = `
<span>${produto.nome}</span>
<span>R$ ${produto.preco}</span>
`;

container.appendChild(item);

total += produto.preco;

});

document.getElementById("total").innerText = "Total: R$ " + total;



function mostrarMetodo(tipo){

document.querySelectorAll(".metodo").forEach(el=>{
el.classList.remove("ativo")
})

document.getElementById(tipo).classList.add("ativo")

}



function pagarCartao(){

alert("Pagamento com cartão aprovado (modo teste)");

localStorage.removeItem("carrinho");

}



function pagarPix(){

alert("Pix gerado (modo teste)");

}

function pagarCartao(){

    localStorage.removeItem("carrinho");
    
    document.getElementById("popupPagamento").style.display = "flex";
    
    }
    
    function pagarPix(){
    
    localStorage.removeItem("carrinho");
    
    document.getElementById("popupPagamento").style.display = "flex";
    
    }
    
    function voltarInicio(){
    
    window.location.href = "index.php";
    
    }