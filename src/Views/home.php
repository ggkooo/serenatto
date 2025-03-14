<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'navbar.php';
?>

<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center">
        <div class="banners-title bg-body-secondary py-5">
            <h2 class="fw-bold font-title">Sua pausa para desfrutar a vida.</h2>
            <p>Boas-vindas ao Bistrô Serenatto! Um ambiente aconchegante e acolhedor para apreciar um bom café.</p>
        </div>
    </section>
    <section class="py-5">
        <h2 class="text-center fw-bold pb-1">Nossos serviços</h2>

        <div class="container d-flex justify-content-around flex-wrap">

            <div class="card m-4" style="width: 20rem;">
                <img src="assets/cafe-card.png" class="card-img-top"
                     alt="Balcão de padaria tradicional com alimentos diversos">
                <div class="card-body">
                    <h5 class="card-title py-2 fw-bold">Café & Bistrô</h5>
                    <p class="card-text">Nosso bistrô oferece uma ampla variedade de cafés, smoothies, deliciosos
                        salgados e sobremesas. Uma excelente opção para quem busca um lugar tranquilo e
                        aconchegante.</p>
                    <a href="#" class="btn btn-default w-100 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="assets/buffet-card.png" class="card-img-top" alt="Mesa de buffet com alimentos diversos">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Buffet</h5>
                    <p class="card-text">Buffet e catering personalizado para eventos, produções e celebrações. Com
                        um menu variado e adaptável às preferências do cliente, atendimento atencioso e
                        profissional.</p>
                    <a href="#" class="btn btn-default w-100 fw-bold mt-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-2" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="assets/delivery-card.png" class="card-img-top" alt="Caixa aberta armazenando comidas diversas">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Delivery</h5>
                    <p class="card-text">Para quem deseja desfrutar no conforto de casa, oferecemos delivery dos
                        produtos. Com o mesmo cardápio variado de sempre, sem perder nosso sabor e padrão de
                        qualidade.</p>
                    <a href="#" class="btn btn-default w-100 fw-bold mt-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-3" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!--CANVAS 01-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-1" aria-labelledby="offcanvasRightLabel-1">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel-1">Café & Bistrô</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Café
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Temos um excelente espaço para alimentação e descanso, com a vitrine recheada de doces, salgados, cafés tradicionais e especiais para desfrutar seus melhores momentos.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button btn-default collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bistrô
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Além de cafés o dia todo, oferecemos refeições em horário de almoço (11 às 15h) com pratos deliciosos de bistrô!</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button btn-default collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Coworking
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Temos espaço adequado para trabalho, com conexão de internet de alta velocidade e instalações confortáveis para reuniões.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--CANVAS 02-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-2" aria-labelledby="offcanvasRightLabel-2">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel-2">Buffet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Eventos
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Organizamos buffet com cardápios variados e personalizados para casamentos, festas de aniversário e outros eventos!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button btn-default collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Catering
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Oferecemos serviço de alimentação variada para coffee breaks, produções e bastidores.  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--CANVAS 03-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-3" aria-labelledby="offcanvasRightLabel-3">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel-3">Delivery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Encomendas para eventos
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Produzimos e entregamos os itens de café de nosso cardápio em grandes quantidades para seus eventos! Basta entrar em contato e fazer a reserva com 72h de antecedência.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button btn-default collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Entrega por aplicativo
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Entregamos pelos aplicativos Ifood e Rappi. Consulte nosso cardápio por lá e faça seu pedido!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php';
