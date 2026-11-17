<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/beneficios.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/depoimentos.css">
    <link rel="stylesheet" href="css/perguntas.css">
    <link rel="stylesheet" href="css/contato.css">
    <title>Doceria</title>
</head>
<body>

    <header class="container" id="home">
        <div class="navbar">
            <p>LOGO</p>
            <nav>
                <ul>
                    <li>
                        <a href="#home">Início</a>
                    </li>

                    <li>
                        <a href="#produtos">Cardápio</a>
                    </li>

                    <li>
                        <a href="#sobre">Sobre Nós</a>
                    </li>

                    <li>
                        <a href="#depoimentos">Depoimentos</a>
                    </li>

                    <li>
                        <a href="#contato">Contato</a>
                    </li>
                </ul>
            </nav>

            <button class="btn-default">
                Fazer Pedido
            </button>
        </div>

        <div class="hero">
            <div class="text-hero">

                <h1>Doces que transformam qualquer momento em uma lembrança especial</h1>
                <p>Bolos, tortas, brownies e doces artesanais preparados com ingredientes selecionados e muito carinho. Peça agora e receba em casa.</p>

                <div class="btns-hero">
                    <button class="btn-default">Fazer Pedido</button>
                    <a href="#produtos" class="btn-default">Ver Cardápio</a>
                </div>
            </div>

            <div class="image-hero">
                <img src="assets/hero-image.png" alt="Imagem Ilustrativa">
            </div>
        </div>
    </header>

    <main>
        <div class="beneficios container" id="beneficios">
            <h2>Benefícios</h2>
            <h3>Por que escolher a nossa doceria?</h3>

            <div class="cards">
                <div class="card">
                    <div class="icon">
                        <img src="assets/trigo.svg" alt="">
                    </div>

                    <div class="linha">
                    </div>

                    <div class="content">
                        <h4>Ingredientes de Qualidade</h3>
                        <p>Selecionamos os melhores ingredientes para garantir sabor e frescor em cada receita.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="icon">
                        <img src="assets/fatia.svg" alt="">
                    </div>

                    <div class="linha">
                    </div>

                    <div class="content">
                        <h4>Produção Artesanal</h3>
                        <p>Cada doce é preparado com atenção aos detalhes para proporcionar uma experiência única.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="icon">
                        <img src="assets/entrega.svg" alt="">
                    </div>

                    <div class="linha">
                    </div>

                    <div class="content">
                        <h4>Entrega Rápida</h3>
                        <p>Receba seus doces favoritos com praticidade e segurança.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="icon">
                        <img src="assets/pessoa.svg" alt="">
                    </div>

                    <div class="linha">
                    </div>

                    <div class="content">
                        <h4>Atendimento Personalizado</h3>
                        <p>Estamos prontos para ajudar você a escolher a melhor opção para qualquer ocasião.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="produtos container" id="produtos">
            <h2>Produtos</h2>
            <h3>Nossos mais vendidos</h3>

            <div class="product-cards">

                <div class="product">
                    <img src="assets/bolo_de-chocolate.png" alt="">
                    <h4>Bolo de Chocolate Belga</h4>
                    <p>Massa fofinha com recheio cremoso e cobertura de chocolate premium.</p>
                    <a href="#">
                        <div id="see-more">
                            <p>Ver mais</p>
                        </div>
                    </a>
                </div>

                <div class="product">
                    <img src="assets/brownie.png" alt="">
                    <h4>Brownie Tradicional</h4>
                    <p>Casquinha crocante por fora e textura macia por dentro.</p>
                    <a href="#">
                        <div id="see-more">
                            <p>Ver mais</p>
                        </div>
                    </a>
                </div>

                <div class="product">
                    <img src="assets/brigadeiros.png" alt="">
                    <h4>Brigadeiros Gourmet</h4>
                    <p>Sabores especiais preparados artesanalmente.</p>
                    <a href="#">
                        <div id="see-more">
                            <p>Ver mais</p>
                        </div>
                    </a>
                </div>

                <div class="product">
                    <img src="assets/torta-de_morango.png" alt="">
                    <h4>Torta de Morango</h4>
                    <p>Combinação perfeita entre creme suave e morangos frescos.</p>
                    <a href="#">
                        <div id="see-more">
                            <p>Ver mais</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="sobre" id="sobre">
            <img src="assets/fachada.png" alt="fachada">
            <div class="sobre-content">
                <h4>Sobre Nós</h4>
                <p>Feito com amor desde o primeiro ingrediente. Nossa paixão pela confeitaria começou com receitas de família e cresceu para levar momentos de felicidade a cada cliente. Acreditamos que um bom doce tem o poder de tornar qualquer dia mais especial, seja em comemorações, encontros ou simplesmente para matar aquela vontade de algo delicioso.</p>
                <a href="#">Ver localização</a>
            </div>
        </div>

        <div class="depoimentos container" id="depoimentos">
            <h2>Depoimentos</h2>
            <h3>O que nossos clientes dizem</h3>

            <div class="depoimentos-cards">
                <div class="card">
                    <img src="assets/avatar_1.png" alt="avatar">
                    <div class="card-content">
                        <p>"Os melhores brownies que já provei. Chegaram fresquinhos e deliciosos."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/avatar_3.png" alt="avatar">
                    <div class="card-content">
                        <p>"O bolo de aniversário ficou perfeito. Além de lindo, estava extremamente saboroso."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/avatar_2.png" alt="avatar">
                    <div class="card-content">
                        <p>"Atendimento excelente e entrega super rápida."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/avatar_1.png" alt="avatar">
                    <div class="card-content">
                        <p>"Os melhores brownies que já provei. Chegaram fresquinhos e deliciosos."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/avatar_3.png" alt="avatar">
                    <div class="card-content">
                        <p>"O bolo de aniversário ficou perfeito. Além de lindo, estava extremamente saboroso."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/avatar_2.png" alt="avatar">
                    <div class="card-content">
                        <p>"Atendimento excelente e entrega super rápida."</p>
                        <p id="name">— Mariana S.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="perguntas container">
            <h2>FAQ</h2>
            <h3>Perguntas Frequentes</h3>

            <div class="interative-box">
                <details>
                    <summary>Vocês fazem encomendas para festas?</summary>
                    <p>Sim! Produzimos doces, bolos e kits personalizados para aniversários, casamentos, chás, confraternizações e outros eventos. Entre em contato para consultar opções e disponibilidade.</p>
                </details>

                <details>
                    <summary>Posso personalizar meu bolo?</summary>
                    <p>Claro! Você pode escolher sabores, recheios, decoração, cores e até incluir mensagens especiais para tornar seu bolo único e do jeito que imaginou.</p>
                </details>

                <details>
                    <summary>Qual o prazo de entrega?</summary>
                    <p>O prazo pode variar de acordo com o pedido e a disponibilidade da agenda. Recomendamos realizar sua encomenda com antecedência para garantir a data desejada.</p>
                </details>

                <details>
                    <summary>Quais formas de pagamento são aceitas?</summary>
                    <p>Aceitamos Pix, cartões de crédito e débito, além de dinheiro. As opções podem variar conforme o tipo de pedido e entrega.</p>
                </details>
            </div>
        </div>

        <div class="contato container" id="contato">
            <h2 id="contato-h2">Contato</h2>
            <h3 id="contato-h3">Fale Conosco</h3>

            <div class="contato-box">
                <div class="informacoes-contato">

                    <div class="contato-card">
                        <div class="icon-contat">
                            <img src="assets/phone.svg" alt="phone-icon">
                        </div>

                        <div class="linha"></div>

                        <div class="icon-content">
                            <p>Telefone</p>
                            <p>
                                <span>(88) 90909-0909</span>
                            </p>
                        </div>
                    </div>

                    <div class="contato-card">
                        <div class="icon-contat">
                            <img src="assets/email.svg" alt="phone-icon">
                        </div>

                        <div class="linha"></div>

                        <div class="icon-content">
                            <p>Email</p>
                            <p>
                                <span>belladolce@gmail.com</span>
                            </p>
                        </div>
                    </div>

                    <div class="contato-card">
                        <div class="icon-contat">
                            <img src="assets/map.svg" alt="phone-icon">
                        </div>

                        <div class="linha"></div>

                        <div class="icon-content">
                            <p>Endereço</p>
                            <p>
                                <span>Pirajá, 333, Juazeiro do Norte/CE</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contato-mensagem">
                    <p>Ficou com alguma dúvida? Envie uma mensagem direta</p>

                    <!-- Tudo o que fica dentro das tags é considerado atributo, assim como os atributos do css-->
                    <form method="post" action="php/mensagem.php">
                        <input placeholder="nome" type="text" id="nome" name="nome" value="">
                        <input placeholder="email" type="text" id="email" name="email" value="">
                        <input placeholder="telefone" type="text" id="telefone" name="telefone" value="">
                        <input placeholder="escreva sua mensagem" type="text" id="mensagem" name="mensagem" value="">
                        <input class="btn-form" type="submit" name="acao" value="Enviar Mensagem">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div></div>

        <div class="footer-content">
            <p>www.belladolce.com.br</p>
        </div>

        <div class="icon-content">
            <img src="assets/whatsapp.svg" alt="whatsapp-icon">
            <img src="assets/facebook.svg" alt="facebook-icon">
            <img src="assets/instagram.svg" alt="instagram-icon">
        </div>
    </footer>

</body>
</html>