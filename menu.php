<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>A.P.S</title>
    <link rel="stylesheet" href="_css/menu.css">
</head>

<body>
    <header>

        <div id="logo">
            <img src="_img/OIG1-removebg-preview.png" alt="logo">
        </div>
        <h1 id="auto">A.P.S</h1>
        <nav>
            <ul class="navigation-menu">
                <li><a href="tela_add.php">Adicionar</a></li>
                <li><a href="tela_list.php">Produtos</a></li>
                <li><a href="tela_vendas.php">Vendas</a></li>
                <li><a href="#">Calendario</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Seja bem-vindo a A.P.S</h1>
                <p>Adicione aqui os seus produtos</p>
                <a href="tela_add.php" class="btn">Adicionar</a>
            </div>
        </section>

        <section class="featured-products">
            <h2>Categorias</h2>
            <div class="product-list">
                <div class="product-card">
                    <img src="_img/carro.jpg" alt="carro">
                    <h3>Carros</h3>
                    <p>Discover the latest smartphones</p>
                    <a href="#" class="btn">Mais Sobre</a>
                </div>
                <div class="product-card">
                    <img src="_img/moto.jpg" alt="moto">
                    <h3>Motos</h3>
                    <p>Powerful laptops for work and play</p>
                    <a href="#" class="btn">Mais Sobre</a>
                </div>
                <div class="product-card">
                    <img src="_img/caminhao.jpg" alt="outro">
                    <h3>Outros</h3>
                    <p>Portable tablets for entertainment</p>
                    <a href="#" class="btn">Mais Sobre</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h3>Sobre nós</h3>
                <p>Temos o compromisso de fornecer os melhores produtos <br> de automóveis aos nossos clientes.</p>
                <div class="contact">
                    <span><i class="material-icons">Endereço</i> 123 Rua do Brasil, Baininha</span>
                    <span><i class="material-icons">Telefone</i> +55 (75) 98765-1234</span>
                    <span><i class="material-icons">Email</i> autopecasaps@gmal.com</span>
                </div>
            </div>
            <div class="footer-section links">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="#">Adicionar</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">Contatos</a></li>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h3>Contate-nos</h3>
                <form action="#">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="material-icons"></i>
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 AutoPecas Store | Designed by T.v.Almeida
        </div>
    </footer>
</body>

</html>