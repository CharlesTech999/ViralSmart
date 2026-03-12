<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViralSmart | Loja de Produtos Virais</title>
    <meta name = "description" content = "Produtos Virais pelos melhores preços...">
    <link rel="stylesheet" href="css/base.css">
    <!-- Acho que fica mais fácil mexer com muitas pessoas se cada CSS for feito separadamente no seu arquivo (ex: 'carrinho.php'), ai deixa a base só pro Root e pra definir as cores com --variaveis -->
</head>
<body>
    <?php
        require_once 'backend/config.php';

        $page = $_GET['page'] ?? 'inicio';

        switch ($page) {
            case 'carrinho':
                $content = 'carrinho.php'; 
                break; // Usem o case 'carrinho' para adicionar páginas que sigam o molde header/pagina/footer  
            case 'login':
                $content = 'login.php';
                include "pages/$content";
                exit; // Usem o case 'login' de exemplo para páginas que não possuem header ou footer
            default:
                $content = 'inicio.php';
                break;
        }

        include 'includes/header.php';
        include "pages/$content";
        include 'includes/footer.php';
    ?>
</body>
</html>