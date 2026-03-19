  const grade = document.getElementById("gradeProdutos");
    const busca = document.getElementById("campoBusca");

    let produtos = [];
    let categoriaAtual = "todos";

    // Carrega o arquivo JSON
    fetch("produtos.json")
      .then(resposta => resposta.json())
      .then(dados => {
        produtos = dados;
        mostrarProdutos(produtos);
        grade.classList.remove("carregando");
      })
      .catch(erro => {
        grade.innerHTML = "Erro ao carregar os produtos 😕<br>" + erro;
      });

    function mostrarProdutos(lista) {
      grade.innerHTML = "";

      if (lista.length === 0) {
        grade.innerHTML = "<p style='grid-column:1/-1;text-align:center;padding:50px;'>Nenhum produto encontrado</p>";
        return;
      }

      lista.forEach(prod => {
        const cartao = document.createElement("div");
        cartao.className = "produto";
        cartao.innerHTML = `
          <img src="\( {prod.imagem}" alt=" \){prod.titulo}">
          <div class="info">
            <h3 class="titulo">${prod.titulo}</h3>
            <div class="preco">R$ ${prod.preco}</div>
            <a href="detalhe.html?id=${prod.id}" class="botao-comprar">Comprar</a>
          </div>
        `;
        grade.appendChild(cartao);
      });
    }

    function filtrarCategoria(botao) {
      // Remove ativo de todos os botões
      document.querySelectorAll(".botao-filtro").forEach(b => b.classList.remove("ativo"));
      botao.classList.add("ativo");

      categoriaAtual = botao.dataset.categoria;
      aplicarFiltros();
    }

    function aplicarFiltros() {
      const texto = busca.value.toLowerCase().trim();

      const filtrados = produtos.filter(prod => {
        const okCategoria = categoriaAtual === "todos" || prod.categoria === categoriaAtual;
        const okBusca = prod.titulo.toLowerCase().includes(texto);
        return okCategoria && okBusca;
      });

      mostrarProdutos(filtrados);
    }

    // Quando digitar na busca
    busca.addEventListener("input", aplicarFiltros);