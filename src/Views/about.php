<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'navbar.php';
?>

<main>
    <section class="banners banner-2 d-flex flex-column justify-content-center text-center">
        <div class="banners-title bg-body-secondary py-5">
            <h2 class="fw-bold font-title">Portas abertas para todos os públicos.</h2>
            <p>Nosso espaço é aconchegante, pet friendly, preparado para receber crianças e pessoas com deficiência. Também oferecemos ambiente de coworking!x1</p>
        </div>
    </section>
    <section class="py-5">
        <h2 class="fw-bold text-center pb-1">Nossos Produtos</h2>
        <div class="container d-flex flex-row flex-wrap">
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-1">
                <img src="/assets/produtos-cafe-tradicional.png" class="card-img-top" alt="Xícara de café preto">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Cafés Tradicionais</h3>
                </div>
            </div>
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-2">
                <img src="/assets/produtos-cafe-especial.png" class="card-img-top" alt="Xícara de café preto especial">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Cafés Especiais</h3>
                </div>
            </div>
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-3">
                <img src="/assets/produtos-vitaminas.png" class="card-img-top" alt="Vitaminas">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Smoothies e Vitaminas</h3>
                </div>
            </div>
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-4">
                <img src="/assets/produtos-paes.png" class="card-img-top" alt="Pães e Focaccias">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Pães e Focaccias</h3>
                </div>
            </div>
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-5">
                <img src="/assets/produtos-doces.png" class="card-img-top" alt="Doces">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Doces</h3>
                </div>
            </div>
            <div class="card border-0 col-12 col-md-6 col-lg-4 btn" data-bs-toggle="modal" data-bs-target="#modal-6">
                <img src="/assets/produtos-salgados.png" class="card-img-top" alt="Salgados">
                <div class="card-body text-center">
                    <h3 class="card-text fw-bold">Salgados</h3>
                </div>
            </div>
        </div>
    </section>
</main>

<!--MODAL 1-->
<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="modal-cafes-tradicionais" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Cafés Tradicionais</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-cafe-tradicional.png" class="w-100" alt="Xícara de café preto">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 2-->
<div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="modal-cafes-especiais" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Cafés Especiais</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-cafe-especial.png" class="w-100" alt="Xícara de café preto">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 3-->
<div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="modal-smoothies-e-vitaminas" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Smoothies e Vitaminas</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-vitaminas.png" class="w-100" alt="Smoothies e Vitaminas">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 4-->
<div class="modal fade" id="modal-4" tabindex="-1" aria-labelledby="modal-paes-e-focaccias" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Pães e Focaccias</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-paes.png" class="w-100" alt="Pães e Focaccias">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 5-->
<div class="modal fade" id="modal-5" tabindex="-1" aria-labelledby="modal-doces" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Doces</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-doces.png" class="w-100" alt="Doces">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL 6-->
<div class="modal fade" id="modal-6" tabindex="-1" aria-labelledby="modal-salgados" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold">Salgados</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/assets/produtos-salgados.png" class="w-100" alt="Salgados">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="modal-footer mx-auto">
                <button type="button" class="btn btn-default border-0" data-bs-dismiss="modal">Fechar janela</button>
            </div>
        </div>
    </div>
</div>

<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php';
